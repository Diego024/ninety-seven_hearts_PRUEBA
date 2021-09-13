<?php

// Clase para manejar los mantenimientos de los clientes

// Es una clase hija de Validator
class Clientes extends Validator {
    //Declaración de atributos
    private $id_cliente = null;
    private $nombres = null;
    private $apellidos = null;
    private $fecha_nacimiento =null;
    private $telefono = null; 
    private $direccion = null;  
    private $correo_electronico = null;
    private $clave = null; 
    private $id_estado_cuenta = null;
    private $id_genero = null;
    private $codigo = null;

    //Funciones para asignar valores a los atributos
    public function setIdCliente($idCliente) {
        if($this->validateNaturalNumber($idCliente)) {
            $this->id_cliente = $idCliente;
            return true;
        } else {
            return false;
        }
    }

    public function setNombres($nombres) {
        if($this->validateAlphanumeric($nombres, 1, 50)) {
            $this->nombres = $nombres;
            return true;
        } else {
            return false;
        }
    }

    public function setApellidos($apellidos) {
        if($this->validateAlphanumeric($apellidos, 1, 50)) {
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

    public function setClave($clave) {
        if($this->validatePassword($clave)) {
            $this->clave = $clave;
            return true;
        } else {
            return false;
        }
    }

    public function setIdEstadoCuenta($estadoCuenta) {
        if($this->validateNaturalNumber($estadoCuenta)) {
            $this->id_estado_cuenta = $estadoCuenta;
            return true;
        } else {
            return false;
        }
    }

    public function setIdGenero($genero) {
        if($this->validateNaturalNumber($genero)) {
            $this->id_genero = $genero;
            return true;
        } else {
            return false;
        }
    }

    public function setCodigo($genero) {
        if($this->validateNaturalNumber($genero)) {
            $this->id_genero = $genero;
            return true;
        } else {
            return false;
        }
    }

    //Funciones para obtener los valores de los atributos
    public function getIdCliente() {
        return $this->id_cliente;
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

    public function getClave() {
        return $this->clave;
    }

    public function getEstadoCuenta() {
        return $this->id_estado_cuenta;
    }

    public function getGenero() {
        return $this->id_genero;
    }

    public function getCodigo() {
        return $this->codigo;
    }
    // Funciones para controlar la cuenta del cliente

    public function checkUser($correo)
    {
        $sql = 'SELECT id_cliente, id_estado_cuenta FROM clientes WHERE correo_electronico = ?';
        $params = array($correo);
        if ($data = Database::getRow($sql, $params)) {
            $this->id_cliente = $data[0]['id_cliente'];
            $this->id_estado_cuenta = $data[0]['id_estado_cuenta'];
            $this->correo_electronico = $correo;
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword($password)
    {
        $sql = 'SELECT clave FROM clientes WHERE id_cliente = ?';
        $params = array($this->id_cliente);
        $data = Database::getRow($sql, $params);
        if (password_verify($password, $data[0]['clave'])) {
            return true;
        } else {
            return false;
        }
    }

    //Funciones para realizar los mantenimientos a la tabla
    public function searchClientes($value)
    {
        $query = 'SELECT c.id_cliente, c.nombres, c.apellidos, c.fecha_nacimiento, c.telefono, c.direccion, c.correo_electronico, c.clave, e.estado_cuenta,g.genero
                FROM public.clientes c
                INNER JOIN estado_cuenta e
                    ON c.id_estado_cuenta = e.id_estado_cuenta
                INNER JOIN generos g
                    ON c.id_genero = g.id_genero
                WHERE apellidos ILIKE ? OR nombres ILIKE ?
                ORDER BY apellidos';
        $params = array("%$value%", "%$value%");
        return Database::getRows($query, $params);
    }

    public function insertClientes() {
        $hash = password_hash($this->clave, PASSWORD_DEFAULT);

        $query = 'INSERT INTO clientes(nombres, apellidos, fecha_nacimiento, telefono, direccion, correo_electronico, clave, id_genero, codigo)
                  VALUES (?, ?, ?, ?, ?, ?, ?, 1, ?)';
        $params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->telefono, $this->direccion, $this->correo_electronico, $hash, $this->codigo);
        return Database::executeRow($query, $params);
    }

    public function selectClientes() {
        $query = 'SELECT c.id_cliente, c.nombres, c.apellidos, c.fecha_nacimiento, c.telefono, c.direccion, c.correo_electronico, c.clave, e.estado_cuenta, g.genero, c.codigo
                  FROM public.clientes c
                  INNER JOIN estado_cuenta e
                    ON c.id_estado_cuenta = e.id_estado_cuenta
                  INNER JOIN generos g
                    ON c.id_genero = g.id_genero
                    ORDER BY id_cliente';
        $params = null;
        return Database::getRow($query, $params);
    }

    public function selectOneCliente() {
        $query = 'SELECT id_cliente, nombres, apellidos, fecha_nacimiento, telefono, direccion, correo_electronico, clave, id_estado_cuenta, id_genero
                  FROM clientes
                  WHERE id_cliente = ?';
        $params = array($this->id_cliente);
        return Database::getRow($query, $params);
    }

    public function updateCliente() {
        $query = 'UPDATE public.clientes
                  SET nombres = ?, apellidos = ?, fecha_nacimiento = ?, telefono = ?, direccion = ?, correo_electronico = ?, id_estado_cuenta = ?, id_genero = ?
                  WHERE id_cliente = ?';
        $params = array($this->nombres, $this->apellidos, $this->fecha_nacimiento, $this->telefono, $this->direccion, $this->correo_electronico, $this->id_estado_cuenta, $this->id_genero, $this->id_cliente);
        return Database::executeRow($query, $params);            
    }

    public function deleteCliente() {
        $query = 'DELETE FROM clientes WHERE id_cliente = ?';
        $params = array($this->id_cliente);
        return Database::executeRow($query, $params);
    }
}
?>