<?php
// Clase para manejar los mantenimientos del catalogo

// Es una clase hija de Validator
class Catalogo extends Validator {
    //Declaración de atributos
    private $id_catalogo_producto = null;
    private $catalogo_producto = null;
    private $descripcion = null;
    private $existencia = null;
    private $pmp = null;
    private $precio_venta = null;
    private $foto_producto = null;
    private $id_categoria = null;
    private $ruta = '../../../resources/imageFiles/dashboard/catalogo/';

    //Funciones para asignar valores a los atributos
    public function setIdCatalogoProducto($idCatalogoProducto) {
        if($this->validateNaturalNumber($idCatalogoProducto)) {
            $this->id_catalogo_producto = $idCatalogoProducto;
            return true;
        } else {
            return false;
        }
    }

    public function setCatalogoProducto($catalogoProducto) {
        if($this->validateAlphaNumeric($catalogoProducto, 1, 100)) {
            $this->catalogo_producto = $catalogoProducto;
            return true;
        } else {
            return false;
        }
    }

    public function setDescripcion($descripcion) {
        if($this->validateAlphaNumeric($descripcion, 1, 500)) {
            $this->descripcion = $descripcion;
            return true;
        } else {
            return false;
        }
    }

    public function setExistencia($existencia) {
        if($this->validateNaturalNumber($existencia)) {
            $this->existencia = $existencia;
            return true;
        } else {
            return false;
        }
    }

    public function setPrecioVenta($precioVenta) {
        if($this->validateMoney($precioVenta)) {
            $this->precio_venta = $precioVenta;
            return true;
        } else {
            return false;
        }
    }

    public function setFotoProducto($imagen) {
        if($this->validateImageFile($imagen, 1000, 1000)) {
            $this->foto_producto = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    public function setIdCategoria($categoria) {
        if($this->validateNaturalNumber($categoria)) {
            $this->id_categoria = $categoria;
            return true;
        } else {
            return false;
        }
    }

    //Functiones para obtener los valores de los atributos
    public function getIdCatalogoProducto() {
        return $this->id_catalogo_producto;
    }

    public function getCatalogoProducto(){
        return $this->catalogo_producto;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getExistencia(){
        return $this->existencia;
    }

    public function getPrecioVenta(){
        return $this->precio_venta;
    }
    
    public function getFotoProducto(){
        return $this->foto_producto;
    }

    public function getIdCategoria(){
        return $this->id_categoria;
    }

    public function getRuta() {
        return $this->ruta;
    }

    //Funciones para realizar los mantenimientos a la tabla    
    public function insertProducts(){
        $query = 'INSERT INTO catalogo_productos (catalogo_producto, descripcion, existencia, precio_venta, foto_producto, id_categoria)
                  VALUES (?, ?, ?, ?, ?,?)';
        $params = array($this->catalogo_producto, $this->descripcion, $this->existencia, $this->precio_venta, $this->foto_producto, $this->id_categoria);
        return Database::executeRow($query, $params);
    }

    public function selectProducts(){
        $query='SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.descripcion, cp.existencia, cp.precio_venta, c.categoria, cp.foto_producto
                FROM catalogo_productos cp
                INNER JOIN categorias c
                    ON c.id_categoria = cp.id_categoria';
        $params = null;
        return Database::getRow($query, $params);
    }

    public function SelectCategoria()
    {
        $sql = 'SELECT id_categoria, categoria, descripcion_categoria, foto_categoria
                FROM categorias
                ORDER BY categoria';
        $params = null;
        print($params);
        return Database::getRows($sql, $params);
    }


    public function selectProductosPorCategoria(){
        $query='SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.existencia, cp.precio_venta
                FROM catalogo_productos cp
                INNER JOIN categorias c
                ON c.id_categoria = cp.id_categoria
                WHERE cp.id_categoria = ?';
        $params = array($this->id_categoria);
        return Database::getRow($query, $params);
    }

    public function searchProducts($value)
    {
        $query="SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.descripcion, cp.existencia, cp.precio_venta, c.categoria, cp.foto_producto
                FROM catalogo_productos cp
                INNER JOIN categorias c
                    ON c.id_categoria = cp.id_categoria
                WHERE categoria ILIKE ? 
                OR catalogo_producto ILIKE ? 
                OR descripcion ILIKE ?
                ORDER BY categoria";
        $params = array("%$value%", "%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function selectOneProduct(){
        $query = 'SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.descripcion, cp.existencia, cp.precio_venta, cp.id_categoria, cp.foto_producto
                  FROM catalogo_productos cp
                  WHERE id_catalogo_producto = ?';
        $params = array($this->id_catalogo_producto);
        return Database::getRow($query, $params);
    }

    public function selectCommentsProducto() {
        $query="SELECT co.id_comentario, co.comentario, CONCAT(c.nombres, ' ', c.apellidos) as nombre, co.fecha_comentario, co.valoracion
                FROM comentarios co
                INNER JOIN clientes c
                    ON c.id_cliente = co.id_cliente
                WHERE id_catalogo_producto = ? AND co.id_estado_comentario = 1";
        $params = array($this->id_catalogo_producto);
        return Database::getRow($query, $params);
    }

    public function selectLowStock() {
        $query="SELECT cp.id_catalogo_producto, cp.catalogo_producto, c.categoria, cp.existencia
                FROM catalogo_productos cp
                INNER JOIN categorias c
                    ON cp.id_categoria = c.id_categoria";
        $params = null;
        return Database::getRow($query, $params);
    }

    public function updateProduct($current_image) {
        ($this->foto_producto) ? $this->deleteFile($this->getRuta(), $current_image) : $this->foto_producto = $current_image;
        
        $query = 'UPDATE catalogo_productos SET catalogo_producto = ?, descripcion = ?, existencia = ?, precio_venta = ?, foto_producto = ?, id_categoria = ? WHERE id_catalogo_producto = ?';
        $params = array($this->catalogo_producto, $this->descripcion, $this->existencia, $this->precio_venta, $this->foto_producto, $this->id_categoria, $this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function deleteProduct() {
        $query = 'DELETE FROM catalogo_productos WHERE id_catalogo_producto = ?';
        $params = array($this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function readFavoritos() {
        $query="SELECT cp.id_catalogo_producto, cp.catalogo_producto, cp.foto_producto, cp.precio_venta
                FROM favoritos f
                INNER JOIN catalogo_productos cp
                ON cp.id_catalogo_producto = f.id_catalogo_producto
                WHERE f.id_cliente = ?";
        $params = array($_SESSION['id_cliente']);
        return Database::getRows($query, $params);
    }

    public function createFavorito() {
        $query="INSERT INTO favoritos(id_cliente, id_catalogo_producto)
                VALUES (?,?)";
        $params = array($_SESSION['id_cliente'], $this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function verifyFavorito() {
        $query="SELECT * FROM favoritos WHERE id_cliente = ? AND id_catalogo_producto = ?";
        $params = array($_SESSION['id_cliente'], $this->id_catalogo_producto);
        return Database::getRow($query, $params);
    }

    public function deleteFavorito () {
        $query="DELETE FROM favoritos WHERE id_cliente = ? AND id_catalogo_producto = ?";
        $params = array($_SESSION['id_cliente'], $this->id_catalogo_producto);
        return Database::executeRow($query, $params);
    }

    public function selectNovedades(){
        $query= "SELECT DISTINCT cp.id_catalogo_producto, cp.catalogo_producto, cp.precio_venta, cp.foto_producto
                 FROM inventario_productos ip
                 INNER JOIN catalogo_productos cp ON ip.id_catalogo_producto = cp.id_catalogo_producto
                 WHERE fecha_registro >= CURRENT_DATE + interval '-1 month'";
        $params = null;
        return Database::getRow($query, $params);
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

    public function getMasVendidos(){
        $query="SELECT deo.id_catalogo_producto, cp.catalogo_producto, SUM(deo.id_catalogo_producto)
                FROM detalle_orden deo
                INNER JOIN orden_compra oc
                    ON deo.id_orden_compra = oc.id_orden_compra
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = deo.id_catalogo_producto
                WHERE oc.id_estado_orden = 1
                GROUP BY deo.id_catalogo_producto, cp.catalogo_producto
                ORDER BY sum DESC
                LIMIT 10";
        $params=null;
        return Database::getRows($query, $params);
    }

    public function getUsuariosMasCompran() {
        $query="SELECT oc.id_cliente, CONCAT(cl.nombres, ' ', cl.apellidos) as nombre_completo, COUNT(oc.id_orden_compra)
                FROM orden_compra oc
                INNER JOIN clientes cl
                    ON cl.id_cliente = oc.id_cliente
                GROUP BY oc.id_cliente, nombre_completo
                ORDER BY count DESC
                LIMIT 10";
        $params=null;
        return Database::getRows($query, $params);
    }
}
?>