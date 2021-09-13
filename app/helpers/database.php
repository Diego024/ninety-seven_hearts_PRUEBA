<?php

// Clase para realizar las operaciones en la base de datos.
class Database {
    // Propiedades de la clase para manejar las acciones
    private static $connection = null;
    private static $statement = null;
    private static $error = null;

    // Función para establecer conexión con el servidor de la base de datos
    private static function connect() {
        // Credenciales de la base de datos
        $server = 'localhost';
        $database = 'Ninety-Seven_Heart';
        $username = 'postgres';
        $password = 'hola';

        // Se crea la conexión mediante la extensión PDO y el controlador para PostgreSQL.
        self::$connection = new PDO('pgsql:host='.$server.';dbname='.$database.';port=5432', $username, $password);
    }

    // Función para ejecutar las siguientes sentencias SQL:
    // Insert, Update y Delete
    public static function executeRow($query, $values) {
        try {
            self::connect();
            self::$statement = self::$connection->prepare($query);
            $state = self::$statement->execute($values);
            //Se anula la conexión con el servidor de la base de datos
            self::$connection = null;
            return $state;
        } catch ( PDOException $error ) {
            self::setException($error->getCode(), $error-> getMessage());
            return false;
        }
    }

    // Función para obtener el valor de la llave primaria del último registro insertado
    public static function getLastRow($query, $values) {
        try{
            self::connect();
            self::$statement = self::$connection->prepare($query);
            if(self::$statement->execute($values)) {
                $id = self::$connection->lastInsertId();
            } else {
                $id = 0;
            }
            self::$connection = null;
            return $id;
        } catch (PDOException $error) {
            self::setException($error->getCode(), $error-> getMessage());
            return 0;
        }
    }

    // Funcion para obtener un registro de una sentencia SQL tipo SELECT.
    public static function getRow($query, $values) {
        try {
            self::connect();
            self::connect();
            self::$statement = self::$connection->prepare($query);
            self::$statement->execute($values);
            self::$connection = null;
            return self::$statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            self::setException($error->getCode(), $error->getMessage());
            return false;
        }
    }

    // Función para obtener todos los registros de una sentencia SQL tipo SELECT.
    public static function getRows($query, $values) {
        try {
            self::connect();
            self::$statement = self::$connection->prepare($query);
            self::$statement->execute($values);
            self::$connection = null;
            return self::$statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            self::setException($error->getCode(), $error->getMessage());
            return false;
        }
    }   

    // Función para establecer un mensaje de error personalizado al ocurrir una excepción.
    
    // Parámetros: $code (código del error) y $message (mensaje original del error).
    private static function setException($code, $message) {
        // Se evalua el código del error recibido
        switch ($code) {
            case '7':
                self::$error = 'Existe un problema al conectar con el servidor';
                break;
            case '42703':
                self::$error = 'Nombre de campo desconocido';
                break;
            case '23505':
                self::$error = 'Dato duplicado, no se puede guardar';
                break;
            case '42P01':
                self::$error = 'Nombre de tabla desconocido';
                break;
            // case '23503':
            //     self::$error = 'Registro ocupado, no se puede eliminar';
            //     break;
            default:
                self::$error = $message;
                break;
        }
    }

    // Método para obtener un error personalizado cuando ocurre una excepción.

    // Retorno: error personalizado de la sentencia SQL o de la conexión con el servidor de base de datos.
    public static function getException() {
        return self::$error;
    }
}