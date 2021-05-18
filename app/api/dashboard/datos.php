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
    if (isset($_SESSION['id_administrador'])) {
        // if (true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $datos->selectPedidos()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay pedidos registrados';
                    }
                }
                break;
            case 'search':
                $_POST = $datos->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $datos->searchPedidos($_POST['search'])) {
                        $result['status'] = 1;
                        $rows = count($result['dataset']);
                        if ($rows > 1) {
                            $result['message'] = 'Se encontraron ' . $rows . ' coincidencias';
                        } else {
                            $result['message'] = 'Solo existe una coincidencia';
                        }
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay coincidencias';
                        }
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
                break;

            case 'readOne':
                if ($datos->setIdOrdenCompra($_POST['id_orden_compra'])) {
                    if ($result['dataset'] = $datos->selectOnePedido()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Pedido no registrad';
                        }
                    }
                } else {
                    $result['exception'] = 'Pedido incorrecto';
                }
                break;
            case 'update':
                $_POST = $datos->validateForm($_POST);
                if ($datos->setIdOrdenCompra($_POST['id_orden_compra'])) {
                    if ($datos->selectOnePedido()) {
                        if ($datos->setIdEstadoOrden($_POST['id_estado_orden'])) {
                            if ($datos->updatePedidos()) {
                                $result['status'] = 1;
                                $result['message'] = 'Pedido actualizado correctamente';
                            } else {
                                $result['message'] = Database::getException();
                            }
                        } else {
                            $result['exception'] = 'Estado incorrecto';
                        }
                    } else {
                        $result['message'] = 'Pedido inexistente';
                    }
                } else {
                    $result['exception'] = 'Pedido incorrecto';
                }
                break;
            case 'readAllHistorial':
                if ($result['dataset'] = $datos->selectHistorial()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay ventas registradas';
                    }
                }
                break;
            case 'searchHistorial':
                $_POST = $datos->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $datos->searchHistorial($_POST['search'])) {
                        $result['status'] = 1;
                        $rows = count($result['dataset']);
                        if ($rows > 1) {
                            $result['message'] = 'Se encontraron ' . $rows . ' coincidencias';
                        } else {
                            $result['message'] = 'Solo existe una coincidencia';
                        }
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay coincidencias';
                        }
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
                break;
            default:
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
