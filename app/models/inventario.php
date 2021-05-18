<?php

// Clase para manejar los mantenimientos de los clientes

// Es una clase hija de Validator
class Inventario extends Validator {
    //Declaración de atributos
    private $id_inventario_producto = null;
    private $id_catalogo_producto = null;
    private $cantidad_adquirida = null;
    private $fecha_registro = null;
    private $precio_adquirido = null;

    //Funciones para asignar valores a los atributos
    public function setIdInventarioProducto($idInventarioProducto) {
        if($this->validateNaturalNumber($idInventarioProducto)) {
            $this->id_inventario_producto = $idInventarioProducto;
            return true;
        } else {
            return false;
        }
    }

    public function setIdCatalogoProducto($idCatalogoProducto) {
        if($this->validateNaturalNumber($idCatalogoProducto)) {
            $this->id_catalogo_producto = $idCatalogoProducto;
            return true;
        } else {
            return false;
        }
    }

    public function setCantidadAdquirida($cantidadAdquirida) {
        if($this->validateNaturalNumber($cantidadAdquirida)) {
            $this->cantidad_adquirida = $cantidadAdquirida;
            return true;
        } else {
            return false;
        }
    }

    public function setFechaRegistro($fechaRegistro) {
        if($this->validateDate($fechaRegistro)) {
            $this->fecha_registro = $fechaRegistro;
            return true;
        } else {
            return false;
        }
    }

    public function setPrecioAdquirido($precioAdquirido) {
        if($this->validateMoney($precioAdquirido)) {
            $this->precio_adquirido = $precioAdquirido;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdInventarioProducto(){
        return $this->id_inventario_producto;
    }

    public function getIdCatalogoProducto(){
        return $this->id_catalogo_producto;
    }

    public function getCantidadAdquirida(){
        return $this->cantidad_adquirida;
    }

    public function getFechaRegistro(){
        return $this->fecha_registro;
    }

    public function getPrecioAdquirido(){
        return $this->precio_adquirido;
    }

    //Funciones para realizar los mantenimientos de la tabla
    public function searchInventarioProducto($value){
        $query = 'SELECT i.id_inventario_producto, c.catalogo_producto, i.cantidad_adquirida, i.fecha_registro, i.precio_adquirido
                  FROM inventario_productos i
                  INNER JOIN catalogo_productos c
                    ON i.id_catalogo_producto = c.id_catalogo_producto
                  WHERE c.catalogo_producto ILIKE ?
                  ORDER BY fecha_registro';
        $params = array("%$value%");
        return Database::getRows($query, $params);
    }

    public function insertInventarioProductos(){
        $query = 'INSERT INTO inventario_productos(id_catalogo_producto, cantidad_adquirida, fecha_registro, precio_adquirido)
            VALUES (?, ?, ?, ?)';
        $params = array($this->id_catalogo_producto, $this->cantidad_adquirida, $this->fecha_registro, $this->precio_adquirido);
        return Database::executeRow($query, $params);
    }

    public function selectInventarioProductos() {
        $query = 'SELECT i.id_inventario_producto, c.catalogo_producto, i.cantidad_adquirida, i.fecha_registro, i.precio_adquirido
                  FROM inventario_productos i
                  INNER JOIN catalogo_productos c
                    ON i.id_catalogo_producto = c.id_catalogo_producto
                  ORDER BY fecha_registro DESC';
        $params = null;
        return Database::getRows($query, $params);
    }

    public function selectOneInventarioProducto() {
        $query = 'SELECT i.id_inventario_producto, i.id_catalogo_producto, i.cantidad_adquirida, i.fecha_registro, i.precio_adquirido
                  FROM inventario_productos i
                  WHERE id_inventario_producto = ?';
        $params = array($this->id_inventario_producto);
        return Database::getRow($query, $params);
    }

    public function updateInventarioProducto(){
        $query = 'UPDATE inventario_productos
                  SET id_catalogo_producto=?, cantidad_adquirida=?, fecha_registro=?, precio_adquirido=?
                  WHERE id_inventario_producto = ?';
        $params = array($this->id_catalogo_producto, $this->cantidad_adquirida, $this->fecha_registro, $this->precio_adquirido, $this->id_inventario_producto);
        return Database::executeRow($query, $params);                 
    }

    public function deleteInventarioProducto() {
        $query = 'DELETE FROM inventario_productos WHERE id_inventario_producto = ?';
        $params = array($this->id_inventario_producto);
        return Database::executeRow($query, $params);        
    }
}

?>