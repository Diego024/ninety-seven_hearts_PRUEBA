<?php
//Clase para manejar los mantenimientos de los comentarios

//Es una clase hija de validator
class Comentarios extends Validator {
    //Declaración de atributos
    private $id_comentario;
    private $id_estado_comentario;

    private $comentario;
    private $id_cliente;
    private $id_catalogo_producto;
    private $valoracion;
    
    //Funciones para asignar valores a los atributos

    public function setValoracion($valoracion) {
        if($valoracion > 0 && $valoracion <= 10 ){
            $this->valoracion = $valoracion;
            return true;
        } else {
            return false;
        }
    }

    public function setComentario($comentario) {
        if(strlen($comentario) <= 700) {
            $this->comentario = $comentario;
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

    public function setIdCatalogoProducto($idProducto) {
        if($this->validateNaturalNumber($idProducto)) {
            $this->id_catalogo_producto = $idProducto;
            return true;
        } else {
            return false;
        }
    }

    public function setIdComentario($idComentario) {
        if($this->validateNaturalNumber($idComentario)) {
            $this->id_comentario = $idComentario;
            return true;
        } else {
            return false;
        }
    }

    public function setIdEstadoComentario($idEstadoComentario) {
        if($this->validateNaturalNumber($idEstadoComentario)) {
            $this->id_estado_comentario = $idEstadoComentario;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener valores de los atributos
    public function getValoracion() {
        return $this->valoracion;
    }
    
    public function getIdComentario(){
        return $this->id_comentario;
    }

    public function getIdEstadoComentario(){
        return $this->id_estado_comentario;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function getIdCatalogoProd() {
        return $this->id_cliente;
    }

    public function getIdCatalogoProducto() {
        return $this->id_catalogo_producto;
    }

    //Funciones para realizar los mantenimientos a la tabla
    public function selectComments() {
        $query="SELECT c.id_comentario, c.comentario, c.valoracion, cp.catalogo_producto, ec.estado_comentario, CONCAT(cl.nombres, ' ', cl.apellidos) as cliente, c.fecha_comentario
                FROM comentarios c
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = c.id_catalogo_producto
                INNER JOIN estados_comentario ec
                    ON ec.id_estado_comentario = c.id_estado_comentario
                INNER JOIN clientes cl
                    ON cl.id_cliente = c.id_cliente";
        $params = null;
        return Database::getRow($query, $params);
    }

    public function searchComments($value)
    {
        $query="SELECT c.id_comentario, c.comentario, c.valoracion, cp.catalogo_producto, ec.estado_comentario, CONCAT(cl.nombres, ' ', cl.apellidos) as cliente, c.fecha_comentario
                FROM comentarios c
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = c.id_catalogo_producto
                INNER JOIN estados_comentario ec
                    ON ec.id_estado_comentario = c.id_estado_comentario
                INNER JOIN clientes cl
                    ON cl.id_cliente = c.id_cliente
                WHERE c.comentario ILIKE ? 
                OR cp.catalogo_producto ILIKE ?
                OR cl.nombres ILIKE ?
                OR cl.apellidos ILIKE ?";
        $params = array("%$value%", "%$value%", "%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function insertComment() {
        $query="INSERT INTO comentarios(comentario, id_catalogo_producto, id_estado_comentario, id_cliente, fecha_comentario, valoracion) 
                VALUES ( ?, ?, 1, ?, ?, ?)";
        $params = array($this->comentario, $this->id_catalogo_producto, $this->id_cliente, date('Y-m-d'), $this->valoracion);
        return Database::executeRow($query, $params);
    }

    public function selectOneComment() {
        $query="SELECT c.id_comentario, c.comentario, c.valoracion, cp.catalogo_producto, c.id_estado_comentario, ec.estado_comentario, CONCAT(cl.nombres, ' ', cl.apellidos) as cliente, c.fecha_comentario
                FROM comentarios c
                INNER JOIN catalogo_productos cp
                    ON cp.id_catalogo_producto = c.id_catalogo_producto
                INNER JOIN estados_comentario ec
                    ON ec.id_estado_comentario = c.id_estado_comentario
                INNER JOIN clientes cl
                    ON cl.id_cliente = c.id_cliente  
                WHERE id_comentario = ?";
        $params = array($this->id_comentario);
        return Database::getRow($query, $params);
    }

    public function updateComment(){
        $query = 'UPDATE comentarios SET id_estado_comentario = ? WHERE id_comentario = ?';
        $params = array($this->id_estado_comentario, $this->id_comentario);
        return Database::executeRow($query, $params);
    }

    public function deleteComment() {
        $query = 'DELETE FROM comentarios WHERE id_comentario = ?';
        $params = array($this->id_comentario);
        return Database::executeRow($query, $params);
    }
}

?>