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

    public function selectNovedades(){
        $query="SELECT DISTINCT cp.catalogo_producto, cp.precio_venta, cp.foto_producto
                FROM inventario_productos ip
                INNER JOIN catalogo_productos cp ON ip.id_catalogo_producto = cp.id_catalogo_producto
                WHERE fecha_registro >= CURRENT_DATE + interval '-1 month'";
        $params = null;
        return Database::getRow($query, $params);
    }
}
?>