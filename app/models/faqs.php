<?php
// Clase para manejar los mantenimientos de las FAQs
class Faqs extends Validator {
    private $id_faq = null;
    private $pregunta = null;
    private $respuesta = null;

    //Funciones para asignar valores a los atributos
    public function setIdFaq ($id_faq) {
        if($this->validateNaturalNumber($id_faq)) {
            $this->id_faq = $id_faq;
            return true;
        } else {
            return false;
        }
    }

    public function setPregunta ($pregunta) {
            if(strlen($pregunta) <= 500) {
                $this->pregunta = $pregunta;
            return true;
        } else {
            return false;
        }
    }

    public function setRespuesta ($respuesta) {
        if(strlen($respuesta) <= 700) {
            $this->respuesta = $respuesta;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdFaq() {
        return $this->id_faq;
    }

    public function getPregunta() {
        return $this->pregunta;
    }

    public function getRespuesta() {
        return $this->respuesta;
    }

    //Funciones para realizar los mantenimientos a la tabla
    public function insertFaq() {
        $query = 'INSERT INTO faq (pregunta, respuesta) VALUES (?,?)';
        $params = array($this->pregunta, $this->respuesta);
        return Database::executeRow($query, $params);
    }

    public function searchFaqs($value)
    {
        $query="SELECT id_faq, pregunta, respuesta 
                FROM faq
                WHERE pregunta ILIKE ? 
                OR respuesta ILIKE ?";
        $params = array("%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function selectFaqs() {
        $query = "SELECT id_faq, pregunta, respuesta FROM faq";
        $params = null;
        return Database::getRow($query, $params);
    }

    public function selectOneFaq() {
        $query = "SELECT id_faq, pregunta, respuesta FROM faq WHERE id_faq = ?";
        $params = array($this->id_faq);
        return Database::getRow($query, $params);
    }

    public function updateFaq() {
        $query = "UPDATE faq SET pregunta = ?, respuesta = ? WHERE id_faq = ?";
        $params = array($this->pregunta, $this->respuesta, $this->id_faq);
        return Database::executeRow($query, $params);
    }

    public function deleteFaq() {
        $query = "DELETE FROM faq WHERE id_faq = ?";
        $params = array($this->id_faq);
        return Database::executeRow($query, $params);
    }
}
?>