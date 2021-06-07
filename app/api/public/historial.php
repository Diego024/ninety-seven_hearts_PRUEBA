<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/datos.php');

//Se comprueba que exista una acción a realizar
if (isset($_GET['action'])) {
    //Se inicializa o se continua la sesión actual
    session_start();
    //Creamos un objeto de la case del model
    $datos = new Datos;
    //Creamos el array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada como administrador
    if (isset($_SESSION['id_cliente'])) {
        // if (true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if (isset($_SESSION['id_cliente'])) {
                    if ($result['dataset'] = $datos->selectHistorialCliente()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay ventas registradas';
                        }
                    }
                }
                break;
            case 'readOne':
                if ($datos->setIdOrdenCompra($_POST['id_orden_compra'])) {
                    //rint($_POST['id_orden_compra']);
                    if ($datos->selectOnePedido()) {
                        $result['dataset'] = $datos->selectOnePedido();
                        $result['status'] = 1;
                    } else {
                        // print('text');
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Pedido no registrado';
                        }
                    }
                } else {
                    $result['exception'] = 'Pedido incorrecto';
                }
                break;
            case 'readAllDetalle':
                // if (isset($_SESSION['id_cliente'])) {
                    if ($result['dataset'] = $datos->selectDetalle()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay ventas registradas';
                        }
                    }
                // }
                break;
                $result['exception'] = 'Acción no disponible dentro de la sesión';
                break;
        }
    }
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}
