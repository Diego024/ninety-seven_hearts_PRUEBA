<?php
//Clase para manejar las tablas de ordenes de compra y detalle_orden de la base de datos.
class Ordenes extends Validator {
    
    //Se declaran los atributos

    private $id_orden_compra = null;
    private $id_detalle_orden = null;
    private $id_cliente = null;
    private $total = null;
    private $id_estado_orden = null;
    private $orden_regalo = null;
    private $comentario = null;

    private $id_catalogo_producto = null;
    private $precio_venta = null;
    private $cantidad = null;
    private $subtotal = null;

    // Finalizada: Cuando un pedido ya fue entregado
    // Entregando: Cuando un pedido se está entregando
    // Pendiente: Cuando un pedido aún no se ha enviado.
    // Anulada: Cuando un pedidio se cancela.
    // En proceso: Cuando un pedido está en proceso de creación.

    //Funciones para validar y asignar valores a los 
    public function setIdOrdenCompra($idOrdenCompra) {
        if ($this->validateNaturalNumber($idOrdenCompra)) {
            $this->id_orden_compra = $idOrdenCompra;
            return true;
        } else {
            return false;
        }
    }

    public function setIdOrdenDetalle($idDetalleOrden) {
        if ($this->validateNaturalNumber($idDetalleOrden)) {
            $this->id_detalle_orden = $idDetalleOrden;
            return true;
        } else {
            return false;
        }
    }

    public function setIdCliente($idCliente) {
        if ($this->validateNaturalNumber($idCliente)) {
            $this->id_cliente = $idCliente;
            return true;
        } else {
            return false;
        }
    }

    public function setTotal($total) {
        if($this->validateMoney($total)) {
            $this->total = $total;
            return true;
        } else {
            return false;
        }
    }

    public function setIdEstadoOrden($idEstadoOrden) {
        if ($this->validateNaturalNumber($idEstadoOrden)) {
            $this->id_estado_orden = $idEstadoOrden;
            return true;
        } else {
            return false;
        }
    }

    public function setOrdenRegalo($ordenRegalo) {
        if($this->validateBoolean($ordenRegalo)) {
            $this->orden_regalo = $ordenRegalo;
            return true;
        } else {
            return false;
        }
    }

    public function setComentario($comentario) {
        if(strlen($comentario) <= 500) {
            $this->comentario = $comentario;
            return true;
        } else {
            return false;
        }
    }
    
    public function setIdCatalogoProducto($idCatalogoProducto) {
        if ($this->validateNaturalNumber($idCatalogoProducto)) {
            $this->id_catalogo_producto = $idCatalogoProducto;
            return true;
        } else {
            return false;
        }
    }
    
    public function setCantidad($cantidad) {
        if ($this->validateNaturalNumber($cantidad)) {
            $this->cantidad = $cantidad;
            return true;
        } else {
            return false;
        }
    }

    public function setSubtotal($cantidad) {
        $subtotal = $cantidad * $this->precio_venta;
        if($this->validateMoney($subtotal)) {
            $this->subtotal = $subtotal;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdOrdenCompra() {
        return $this->id_orden_compra;
    }

    //Funciones para realizar las interacciones con la base de datos

    //Función para verificar si existe una orden en proceso, para continuar con esa o crear una nueva
    public function startOrder() {
        $this->id_estado_orden = 5;

        $query="SELECT id_orden_compra
                FROM orden_compra
                WHERE id_cliente = ? AND id_estado_orden = ?";
        $params = array($_SESSION['id_cliente'], $this->id_estado_orden);
        //Se ejecuta y se verifica que si hay una orden en proceso
        if($data = Database::getRow($query, $params)) {
            $this->id_orden_compra = $data[0]['id_orden_compra'];
            return true;
        } else {
            $insertQuery="INSERT INTO orden_compra(id_cliente, id_estado_orden) 
                    VALUES (?, ?)";
            $idcliente = $_SESSION['id_cliente'];
            $params = array($idcliente, $this->id_estado_orden);
            
            if($this->id_orden_compra = Database::getLastRow($insertQuery, $params)) {
                // print("a");
                return true;
            } else {
                return false;
            }
        }
    }

    public function verifyDetail() {
            //Se verifica que no haya un un detalle con el producto que se quiere agregar.
            $query="SELECT de.id_catalogo_producto
                    FROM detalle_orden de
                    INNER JOIN orden_compra oc
                        ON oc.id_orden_compra = de.id_orden_compra
                    WHERE de.id_catalogo_producto = ? AND oc.id_cliente = ? AND oc.id_estado_orden = 5";
            $params = array($this->id_catalogo_producto, $_SESSION['id_cliente']);
            return Database::getRow($query, $params);
        }

    public function verifyExistence() {
        $query="SELECT existencia, precio_venta
                FROM catalogo_productos 
                WHERE id_catalogo_producto = ?";
        $params = array($this->id_catalogo_producto);
        //Se ejecuta y se verifica que si la cantidad es mayor que la existencia
        $data = Database::getRows($query, $params);
        $this->precio_venta = $data[0]['precio_venta'];
        if( $this->cantidad <= $data[0]['existencia'] && $this->cantidad > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getLastExistence() {
        $query="SELECT cantidad
                FROM detalle_orden de
                INNER JOIN orden_compra oc
                    ON oc.id_orden_compra = de.id_orden_compra
                WHERE de.id_orden_compra = ? AND oc.id_estado_orden = 5 AND de.id_catalogo_producto = ?";
        $params = array($this->id_orden_compra, $this->id_catalogo_producto);
        return Database::getRow($query, $params);
    }

    public function insertDetail() {
        $query="INSERT INTO detalle_orden(id_orden_compra, id_catalogo_producto, cantidad, subtotal)
                VALUES (?,?,?,?)";
        $params = array($this->id_orden_compra, $this->id_catalogo_producto, $this->cantidad, $this->subtotal);
        return Database::executeRow($query, $params);
    }
    
    public function updateDetail() {
        $query="UPDATE detalle_orden SET cantidad = ?, subtotal = ?  WHERE id_orden_compra = ? AND id_catalogo_producto = ?";
        $params = array($this->cantidad, $this->subtotal , $this->id_orden_compra, $this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function readCarrito() {
        $query="SELECT de.id_catalogo_producto, cp.catalogo_producto, cp.precio_venta, de.cantidad, cp.foto_producto, de.id_detalle_orden
                FROM detalle_orden de
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = de.id_catalogo_producto
                WHERE de.id_orden_compra = ?";
        $params = array($_SESSION['id_orden_compra']);
        return Database::getRows($query, $params);
    }

    public function deleteDetail() {
        $query="DELETE FROM detalle_orden WHERE id_detalle_orden = ?";
        $params = array($this->id_detalle_orden);
        return Database::executeRow($query, $params);
    }

    public function readOrderInfo() {
        $query="SELECT SUM(subtotal), SUM(cantidad) as totalProductos
                FROM detalle_orden
                WHERE id_orden_compra = ?";
        $params = array($_SESSION['id_orden_compra']);
        return Database::getRows($query, $params);
    }

    public function makeOrder() {
        $query="UPDATE orden_compra
                SET fecha_orden = current_date, total = ?, id_estado_orden = 3, orden_regalo = ?, comentario = ?
                WHERE id_orden_compra = ?";
        $params = array($this->total, $this->orden_regalo, $this->comentario, $_SESSION['id_orden_compra']);
        return Database::executeRow($query, $params);
    }

    public function updateExistence() {
        $query="UPDATE catalogo_productos SET existencia = (SELECT existencia FROM catalogo_productos WHERE id_catalogo_producto = ? ) - ? WHERE id_catalogo_producto = ?";
        $params = array($this->id_catalogo_producto, $this->cantidad, $this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function selectProductosVendidos() {
        $query = "SELECT d.id_orden_compra, cp.id_catalogo_producto, cp.catalogo_producto, d.cantidad, oc.fecha_orden
                FROM detalle_orden d
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = d.id_catalogo_producto
                INNER JOIN orden_compra oc
                    ON d.id_orden_compra = oc.id_orden_compra
                WHERE d.id_catalogo_producto = ? AND oc.id_estado_orden = 1";
        $params =array($this->id_catalogo_producto);
        return Database::getRow($query, $params);                  
    }

    public function selectOneProduct(){
        $query = 'SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.descripcion, cp.existencia, cp.precio_venta, cp.id_categoria, cp.foto_producto
                  FROM catalogo_productos cp
                  WHERE id_catalogo_producto = ?';
        $params = array($this->id_catalogo_producto);
        return Database::getRow($query, $params);
    }
}
?>