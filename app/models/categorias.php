<?php

//Clase para manejar los mantenimientos de la tabla

//Es una clase hija de Validator
class Categorias extends Validator {

    //Declaración de atributos
    //Lo haces vos Moys

    //Funciones para asignar valores a los atributos
    //Lo de arriba pordos

    //Funciones para obtener los valores de los atributos
    //portres

    //Funciones para realizar los mantenimientos de la tabla
    public function selectCategories() {
        $query = 'SELECT * FROM categorias';
        $params = null;
        return Database::getRows($query, $params);
    }
}

?>