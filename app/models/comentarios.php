<?php
//Clase para manejar los mantenimientos de los comentarios

//Es una clase hija de validator
class Comentarios extends Validator {
    //Declaración de atributos
    private $id_comentario;
    private $id_estado_comentario;
    
    //Funciones para asignar valores a los atributos
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
    public function getIdComentario(){
        return $this->id_comentario;
    }

    public function getIdEstadoComentario(){
        return $this->id_estado_comentario;
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