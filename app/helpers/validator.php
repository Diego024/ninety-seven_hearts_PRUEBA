<?php

// Clase para validar todos los datos de entrada del lado del servidor

// Es clase padre de los modelos

class Validator {
    // Propiedades de algunas validaciones
    private $passwordError = null;
    private $imageError = null;
    private $imageName = null;


    // Getters
    public function getPasswordError () {
        return $this->passwordError;
    }

    public function getImageName () {
        return $this->imageName;
    }

    public function getImageError() {
        return $this->imageError;
    }

    // Método para ajustar todos los campos de un formulario (quitar los espacios en blanco al principio y al final).
    
    // Parámetros: $fields (arreglo con los campos del formulario).
    public function validateForm() {
        foreach($fields as $index => $value) {
            $value = trim($value);
            $fields[$index] = $value;
        }
        return $fields;
    }

}