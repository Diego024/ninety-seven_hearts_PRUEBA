<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/inventario.php');

//Se comprueba que exista una acción a realizar
if (isset($_GET['action'])) {
    //Se inicializa o se continua la sesión actual
    session_start();
    //Creamos un objeto de la case del model
    $inventario = new Inventario;
    //Creamos el array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada como administrador
    // if(isset($_SESSION['id_administrador'])) {
    if (true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $inventario->selectInventarioProductos()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay clientes registradas';
                    }
                }
                break;
            case 'search':       
                $_POST = $inventario->validateForm($_POST);
                if ($_POST['search'] != '') {
                    //print_r($_POST['search']);
                    if ($result['dataset'] = $inventario->searchInventarioProducto($_POST['search'])) {
                        $result['status'] = 1;
                        print_r($result['dataset']);
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
            case 'create':
                //print_r($_POST);
                $_POST = $inventario->validateForm($_POST);
                if (isset($_POST['id_catalogo_producto'])) {
                    if ($inventario->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                        if ($inventario->setCantidadAdquirida($_POST['cantidad'])) {
                            if ($inventario->setFechaRegistro($_POST['fecha_registro'])) {
                                if ($inventario->setPrecioAdquirido($_POST['precio_adquirido'])) {
                                    if ($inventario->insertInventarioProductos()) {
                                        $result['status'] = 1;
                                        $result['message'] = 'Registro ingresado correctamente';
                                    } else {
                                        //print("arigatooo");
                                        $result['exception'] = Database::getException();;
                                    }
                                } else {
                                    $result['exception'] = 'Precio incorrecto';
                                }
                            } else {
                                $result['exception'] = 'Fecha incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Cantidad incorrecta';
                        }
                    } else {
                        $result['exception'] = 'Producto incorrecto';
                    }
                } else {
                    $result['exception'] = 'Seleccione un producto';
                }

                break;
            case 'readOne':
                if ($inventario->setIdInventarioProducto($_POST['id_inventario_producto'])) {
                    if ($result['dataset'] = $inventario->selectOneInventarioProducto()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Registro no registrado';
                        }
                    }
                } else {
                    $result['exception'] = 'Registro incorrecto';
                }
                break;
            case 'update':
                $_POST = $inventario->validateForm($_POST);
                if ($inventario->setIdInventarioProducto($_POST['id_inventario_producto'])) {
                    if ($inventario->selectOneInventarioProducto()) {
                        if ($inventario->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                            if ($inventario->setCantidadAdquirida($_POST['cantidad'])) {
                                if ($inventario->setFechaRegistro($_POST['fecha_registro'])) {
                                    if ($inventario->setPrecioAdquirido($_POST['precio_adquirido'])) {
                                        if ($inventario->updateInventarioProducto()) {
                                            $result['status'] = 1;
                                            $result['message'] = 'Registro actualizado correctamente';
                                        } else {
                                            $result['exception'] = Database::getException();;
                                        }
                                    } else {
                                        $result['exception'] = 'Precio incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Fecha incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Cantidad incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Producto incorrecto';
                        }
                    } else {
                        $result['message'] = 'Registro inexistente';
                    }
                } else {
                    $result['exception'] = 'Registro incorrecto';
                }
                break;
            case 'delete':
                if ($inventario->setIdInventarioProducto($_POST['id_inventario_producto'])) {
                    if ($data = $inventario->selectOneInventarioProducto()) {
                        if ($inventario->deleteInventarioProducto()) {
                            $result['status'] = 1;
                            $result['message'] = 'Registro eliminado correctamente';
                        } else {
                            $result['message'] = Database::getException();
                        }
                    } else {
                        $result['message'] = 'Registro inexistente';
                    }
                } else {
                    $result['message'] = 'Registro incorrecto';
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
