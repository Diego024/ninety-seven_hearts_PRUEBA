<?php

//Clase para manejar los mantenimientos de las ordenes de compra

//Es una clase hija de Validator
class Datos extends Validator {
    //Declaración de atributos
    private $id_orden_compra = null;
    private $id_cliente = null;
    private $fecha_orden = null;
    private $total = null;
    private $id_estado_orden = null;
    private $orden_regalo = null;
    private $comentario = null;

    //Funciones para asignar valores a los atributos
    public function setIdOrdenCompra($idOrdenCompra) {
        if($this->validateNaturalNumber($idOrdenCompra)) {
            $this->id_orden_compra = $idOrdenCompra;
            return true;
        } else {
            return false;
        }
    }

    public function setIdCliente($idCliente) {
        if($this->validateNaturalNumber($idCliente)) {
            $this->id_cliente = $idCliente;
            return true;
        } else {
            return false;
        }
    }

    public function setFechaOrden($fechaOrden) {
        if($this->validateDate($fechaOrden)) {
            $this->fecha_orden = $fechaOrden;
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

    public function setIdEstadoOrden($IdEstadoOrden) {
        if($this->validateNaturalNumber($IdEstadoOrden)) {
            $this->id_estado_orden = $IdEstadoOrden;
            return true;
        } else {
            return false;
        }
    }

    public function setOrdenRegalo($regalo) {
        if($this->validateBoolean($regalo)) {
            $this->orden_regalo = $regalo;
            return true;
        } else {
            return false;
        }
    }

    public function setComentario($comentario) {
        if($this->validateAlphanumeric($comentario, 1, 500)) {
            $this->comentario = $comentario;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdOrdenCompra() {
        return $this->id_orden_compra;
    }

    public function getIdCliente() {
        return $this->id_cliente;
    }

    public function getFechaOrden() {
        return $this->fecha_orden;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getIdEstadoOrden() {
        return $this->id_estado_orden;
    }

    public function getOrdenRegalo() {
        return $this->orden_regalo;
    }

    public function getComentario() {
        return $this->comentario;
    }

    //Funciones para realizar los mantenimientos a la tabla
    public function selectHistorial() {
        $query = "SELECT oc.id_orden_compra, CONCAT(c.nombres,' ',c.apellidos) AS Cliente, oc.fecha_orden, oc.total, eo.estado_orden
                  FROM orden_compra oc
                  INNER JOIN clientes c
                    ON c.id_cliente = oc.id_cliente
                  INNER JOIN estados_orden eo
                    ON eo.id_estado_orden = oc.id_estado_orden
                  WHERE oc.id_estado_orden = 1
                  ORDER BY Cliente";
        $params = null;
        return Database::getRow($query, $params);                  
    }

    public function searchHistorial($value) {
        $query = "SELECT oc.id_orden_compra, CONCAT(c.nombres,' ',c.apellidos) AS Cliente, oc.fecha_orden, oc.total, eo.estado_orden
                  FROM orden_compra oc
                  INNER JOIN clientes c
                    ON c.id_cliente = oc.id_cliente
                  INNER JOIN estados_orden eo
                    ON eo.id_estado_orden = oc.id_estado_orden
                  WHERE oc.id_estado_orden = 1 AND (c.nombres ILIKE ? OR c.apellidos ILIKE ?)
                  ORDER BY Cliente";
        $params = array("%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function selectPedidos() {
        $query = "SELECT oc.id_orden_compra, CONCAT(c.nombres,' ',c.apellidos) AS Cliente, oc.fecha_orden, oc.total, eo.estado_orden
                  FROM orden_compra oc
                  INNER JOIN clientes c
                    ON c.id_cliente = oc.id_cliente
                  INNER JOIN estados_orden eo
                    ON eo.id_estado_orden = oc.id_estado_orden
                  WHERE oc.id_estado_orden BETWEEN 2 AND 5
                  ORDER BY Cliente";
        $params = null;
        return Database::getRow($query, $params); 
    }

    public function searchPedidos($value) {
        $query = "SELECT oc.id_orden_compra, CONCAT(c.nombres,' ',c.apellidos) AS Cliente, oc.fecha_orden, oc.total, eo.estado_orden
                  FROM orden_compra oc
                  INNER JOIN clientes c
                    ON c.id_cliente = oc.id_cliente
                  INNER JOIN estados_orden eo
                    ON eo.id_estado_orden = oc.id_estado_orden
                  WHERE (oc.id_estado_orden BETWEEN 2 AND 5) AND (c.nombres ILIKE ? OR c.apellidos ILIKE ?)
                  ORDER BY Cliente";
        $params = array("%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function selectOnePedido() {
        $query = "SELECT id_orden_compra, id_cliente, fecha_orden, total, id_estado_orden, orden_regalo, comentario
                  FROM public.orden_compra
                  WHERE id_orden_compra = ?";
        $params = array($this->id_orden_compra);
        return Database::executeRow($query, $params);   
    }

    public function updatePedidos() {
        $query = "UPDATE public.orden_compra
                  SET id_estado_orden = ?
                  WHERE id_orden_compra = ?";
        $params = array($this->id_estado_orden, $this->id_orden_compra);
        return Database::executeRow($query, $params);  
    }
}

?>