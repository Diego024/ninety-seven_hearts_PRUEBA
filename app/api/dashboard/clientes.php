<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/clientes.php');

//Se comprueba que exista una acción a realizar
if (isset($_GET['action'])) {
    //Se inicializa o se continua la sesión actual
    session_start();
    //Creamos un objeto de la case del model
    $clientes = new Clientes;
    //Creamos el array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada como administrador
    // if(isset($_SESSION['id_administrador'])) {
    if (true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $clientes->selectClientes()) {
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
                    $_POST = $clientes->validateForm($_POST);
                    if ($_POST['search'] != '') {
                        if ($result['dataset'] = $clientes->searchClientes($_POST['search'])) {
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
            case 'create':
                $_POST = $clientes->validateForm($_POST);
                if ($clientes->setNombres($_POST['nombres'])) {
                    if ($clientes->setApellidos($_POST['apellidos'])) {
                        if ($clientes->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                            if ($clientes->setTelefono($_POST['telefono'])) {
                                if ($clientes->setDireccion($_POST['direccion'])) {
                                    if ($clientes->setCorreo($_POST['correo_electronico'])) {
                                        if ($_POST['clave'] == $_POST['confirmar_clave']) {
                                            if ($clientes->setClave($_POST['clave'])) {
                                                if ($clientes->setIdEstadoCuenta($_POST['id_estado_cuenta'])) {
                                                    if ($clientes->setIdGenero($_POST['id_genero'])) {
                                                        if ($clientes->insertClientes()) {
                                                            $result['status'] = 1;
                                                            $result['message'] = 'Cliente registrado correctamente';
                                                        } else {
                                                            $result['exception'] = Database::getException();;
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Género incorrecto';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Estado incorrecto';
                                                }
                                            } else {
                                                $result['exception'] = $clientes->getPasswordError();
                                            }
                                        } else {
                                            $result['exception'] = 'Claves diferentes';
                                        }
                                    } else {
                                        $result['exception'] = 'Correo incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Dirección incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Teléfono incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Fecha incorrecta';
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'readOne':
                if ($clientes->setIdCliente($_POST['id_cliente'])) {
                    if ($result['dataset'] = $clientes->selectOneCliente()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Cliente no registrada';
                        }
                    }
                } else {
                    $result['exception'] = 'Cliente incorrecto';
                }
                break;
            case 'update':
                $_POST = $clientes->validateForm($_POST);
                if ($clientes->setIdCliente($_POST['id_cliente'])) {
                    if ($clientes->selectOneCliente()) {
                        if ($clientes->setNombres($_POST['nombres'])) {
                            if ($clientes->setApellidos($_POST['apellidos'])) {
                                if ($clientes->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                                    if ($clientes->setTelefono($_POST['telefono'])) {
                                        if ($clientes->setDireccion($_POST['direccion'])) {
                                            if ($clientes->setCorreo($_POST['correo_electronico'])) {
                                                if ($clientes->setIdEstadoCuenta($_POST['id_estado_cuenta'])) {
                                                    if ($clientes->setIdGenero($_POST['id_genero'])) {
                                                        if ($clientes->updateCliente()) {
                                                            $result['status'] = 1;
                                                            $result['message'] = 'Cliente actualizado correctamente';
                                                        } else {
                                                            $result['exception'] = Database::getException();;
                                                        }
                                                    } else {
                                                        $result['exception'] = 'Género incorrecto';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Estado incorrecto';
                                                }
                                            } else {
                                                $result['exception'] = 'Correo incorrecto';
                                            }
                                        } else {
                                            $result['exception'] = 'Dirección incorrecta';
                                        }
                                    } else {
                                        $result['exception'] = 'Teléfono incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Fecha incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['message'] = 'Cliente inexistente';
                    }
                } else {
                    $result['exception'] = 'Cliente incorrecto';
                }
                break;
            case 'delete':
                if ($clientes->setIdCliente($_POST['id_cliente'])) {
                    if ($data = $clientes->selectOneCliente()) {
                        if ($clientes->deleteCliente()) {
                            $result['status'] = 1;
                            $result['message'] = 'Cliente eliminado correctamente';
                        } else {
                            $result['message'] = Database::getException();
                        }
                    } else {
                        $result['message'] = 'Cliente inexistente';
                    }
                } else {
                    $result['message'] = 'Cliente incorrecto';
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
