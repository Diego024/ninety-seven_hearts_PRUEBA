<?php

// Clase para manejar los mantenimientos de los administradores

// Es una clase hija de Validator
class Administradores extends Validator {
    //Declarando atributos
    private $id_administrador = null;
    private $nombres = null;
    private $apellidos = null;
    private $fecha_nacimiento = null;
    private $telefono = null;
    private $direccion = null;
    private $correo_electronico = null;
    private $foto_administrador = null;
    private $usuario = null;
    private $clave = null;
    private $id_estado_cuenta = null;
    private $id_genero = null;
    private $ruta = '../../resources/imageFiles/dashboard/administradores/';

    //Funciones para asignar valores a los atributos
    public function setIdAdministrador($idAdministrador) {
        if( $this->validateNaturalNumber($idAdministrador)) {
            $this->id_administrador = $idAdministrador;
            return true;
        } else {
            return false;
        }
    }

    public function setNombres($nombres) {
        if( $this->validateAlphanumeric($nombres, 1,  50)) {
            $this->nombres = $nombres;
            return true;
        } else {
            return false;
        }
    }

    public function setApellidos($apellidos) {
        if( $this->validateAlphanumeric($apellidos, 1,  50)) {
            $this->apellidos = $apellidos;
            return true;
        } else {
            return false;
        }
    }

    public function setFechaNacimiento($fechaNacimiento) {
        if($this->validateDate($fechaNacimiento)) {
            $this->fecha_nacimiento = $fechaNacimiento;
            return true;
        } else {
            return false;
        }
    }

    public function setTelefono($telefono) {
        if($this->validatePhone($telefono)) {
            $this->telefono = $telefono;
            return true;
        } else {
            return false;
        }
    }
    
    public function setDireccion($direccion) {
        if(strlen($direccion) <= 500) {
            $this->direccion = $direccion;
            return true;
        } else {
            return false;
        }
    }

    public function setCorreo($correo) {
        if($this->validateEmail($correo)) {
            $this->correo_electronico = $correo;
            return true;
        } else {
            return false;
        }
    }

    public function setFotoAdministrador($imagen) {
        if($this->validateImageFile($imagen, 1000, 1000)) {
            $this->foto_administrador = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    public function setUsuario($usuario)  {
        if($this->validateAlphanumeric($usuario, 1, 25)) {
            $this->usuario = $usuario;
            return true;
        } else {
            return false;
        }
    }

    public function setClave($clave) {
        if($this->validatePassword($clave)) {
            $this->clave = $clave;
            return true;
        } else {
            return false;
        }
    }

    public function setEstadoCuenta($idEstadoCuenta) {
        if($this->validateNaturalNumber($idEstadoCuenta)) {
            $this->id_estado_cuenta = $idEstadoCuenta;
            return true;
        } else {
            return false;
        }
    }

    public function setGenero($idGenero) {
        if($this->validateNaturalNumber($idGenero)) {
            $this->id_genero = $idGenero;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdAdministrador() {
        return $this->id_administrador;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCorreo() {
        return $this->correo_electronico;
    }

    public function getFotoAdministrador() {
        return $this->foto_administrador;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getEstadoCuenta() {
        return $this->id_estado_cuenta;
    }

    public function getGenero() {
        return $this->id_genero;
    }

    public function getRuta() {
        return $this->ruta;
    }

    //Funciones para realizar los mantenimientos a la tabla

    public function checkUser($usuario) {
        $query = 'SELECT id_administrador FROM administradores WHERE usuario = ?';
        $params = array($usuario);
        if ($data = Database::getRow($sql, $params)) {
            $this->id_adminsitrador = $data['id_administrador'];
            $this->usuario = $usuario;
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword($password) {
        $query = 'SELECT clave FROM administradores WHERE id_administrador = ?';
        $params = array($this->id);
        $data = Database::getRow($query, $params);
        if(password_verify($password, $data['clave'])) {
            return true;
        } else {
            return false;
        }
    }

    public function insertAdmin() {
        $query = 'INSERT INTO administradores (nombres, apellidos, fecha_nacimiento, telefono, direccion, correo_electronico, foto_administrador, usuario, clave,id_estado_cuenta, id_genero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->telefono, $this->direccion, $this->correo_electronico, $this->foto_administrador, $this->usuario, $this->clave, $this->id_estado_cuenta, $this->id_genero);
        return Database::executeRow($query, $params);
    }

    public function selectAdmins() {
        $query = 'SELECT a.id_administrador, a.nombres, a.apellidos, a.fecha_nacimiento, a.telefono, a.direccion, a.correo_electronico, a.foto_administrador, a.usuario, ea.estado_cuenta, g.genero 
                  FROM administradores a 
                  INNER JOIN generos g 
                    ON g.id_genero = a.id_genero 
                  INNER JOIN estado_cuenta ea 
                    ON ea.id_estado_cuenta = a.id_estado_cuenta';
        $params = null;
        return Database::getRow($query, $params);
    }

    public function selectOneAdmin() {
        $query = 'SELECT id_administrador, nombres, apellidos, fecha_nacimiento, telefono, direccion, correo_electronico, foto_administrador, usuario, id_estado_cuenta, id_genero  FROM administradores WHERE id_administrador = ?';
        $params = array($this->id_administrador);
        return Database::getRow($query, $params);
    }

    public function updateAdmin($current_image) {

        ($this->foto_administrador) ? $this->deleteFile($this->getRuta(), $current_image) : $this->foto_administrador = $current_image;

        $query = 'UPDATE administradores SET nombres = ?, apellidos = ?, fecha_nacimiento = ?, telefono = ?, direccion = ?, correo_electronico = ?, foto_administrador = ?, id_estado_cuenta = ?, id_genero = ? WHERE id_administrador = ?';
        $params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->telefono, $this->direccion, $this->correo_electronico, $this->foto_administrador, $this->id_estado_cuenta, $this->id_genero, $this->id_administrador);
        return Database::executeRow($query, $params);
    }

    public function deleteAdmin() {
        $query = 'DELETE FROM administradores WHERE id_administrador = ?';
        $params = array($this->id_administrador);
        return Database::executeRow($query, $params);
    }
}