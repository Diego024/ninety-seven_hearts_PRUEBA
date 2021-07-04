<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/administradores.php');

//Se comprueba que sí exista una acción a realizar
if( isset($_GET['action'])) {
    //Se inicializa una sesión o se continua la que está
    session_start();
    //Creamos un objeto de la clase del modelo
    $administrador = new Administradores;
    //Creamos un array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada por un administrador
    if ( isset($_SESSION['id_administrador'])) {
    // if () {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'logOut':
                if (session_destroy()) {
                    $result['status'] = 1;
                    $result['message'] = 'Sesión eliminada correctamente';
                } else {
                    $result['exception'] = 'Ocurrió un problema al cerrar la sesión';
                }
                break;
            case 'readAll':
                if ($result['dataset'] = $administrador->selectAdmins()) {
                    $result['status'] = 1;
                } else {
                    if ( Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay Administradores registrados';
                    }
                }
                break;
            case 'search':
                $_POST = $administrador->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $administrador->searchAdmins($_POST['search'])) {
                        $result['status'] = 1;
                        $rows = count($result['dataset']);
                        if ($rows > 0) {
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
                $_POST = $administrador->validateForm($_POST);
                if ($administrador->setNombres($_POST['nombres'])) {
                    if($administrador->setApellidos($_POST['apellidos'])) {
                        if($administrador->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                            if($administrador->setTelefono($_POST['telefono'])) {
                                if($administrador->setDireccion($_POST['direccion'])) {
                                    if($administrador->setCorreo($_POST['correo_electronico'])) {
                                        if(is_uploaded_file($_FILES['foto_administrador']['tmp_name'])) {
                                            if($administrador->setFotoAdministrador($_FILES['foto_administrador'])) {
                                                if($administrador->setUsuario($_POST['usuario'])) {
                                                    if ($_POST['clave'] == $_POST['confirmar_clave']) {
                                                        if($administrador->setClave($_POST['clave'])) {
                                                            if($administrador->setEstadoCuenta($_POST['id_estado_cuenta'])) {
                                                                if($administrador->setGenero($_POST['id_genero'])) {
                                                                    if($administrador->insertAdmin()) {
                                                                        $result['status'] = 1;
                                                                        // print_r($_FILES['foto_administrador']);
                                                                        // print($administrador->getRuta());
                                                                        // print($administrador->getFotoAdministrador());
                                                                        if ($administrador->saveFile($_FILES['foto_administrador'], $administrador->getRuta(), $administrador->getFotoAdministrador())) {
                                                                            $result['message'] = 'Administrador creado correctamente';
                                                                            } else {
                                                                                $result['message'] = 'Administrador creado pero no se guardó la imagen';
                                                                            }
                                                                    } else {
                                                                        $result['exception'] = Database::getException();;
                                                                    }
                                                                } else {
                                                                    $result['exception'] = 'Seleccione un genero';
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Seleccione un estado de cuenta';
                                                            }
                                                        } else {
                                                            $result['exception'] = $administrador->getPasswordError();
                                                        }                                                        
                                                    } else {
                                                        $result['exception'] = 'Claves diferentes';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Usuario incorrecto';
                                                }
                                            } else {
                                                $result['exception'] = $Administrador->getImageError();
                                            }
                                        } else {
                                            $result['exception'] = 'Seleccione una imagen';
                                        }
                                    } else {
                                        $result['exception'] = 'Correo electrónico incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Dirección incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Teléfono incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Fecha de nacimiento incorrecta';    
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            case 'readOne': 
                if($administrador->setIdAdministrador($_POST['id_administrador'])) {
                    if($result['dataset'] = $administrador->selectOneAdmin()) {
                        $result['status'] = 1;
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Administrador inexistente';
                        }
                    }
                } else {
                    $result['exception'] = 'Administrador incorrecto';
                }
                break;
            case 'update':
                $_POST = $administrador->validateForm($_POST);
                if($administrador->setIdAdministrador($_POST['id_administrador'])) {   
                    if($data = $administrador->selectOneAdmin()) {
                        if ($administrador->setNombres($_POST['nombres'])) {
                            if($administrador->setApellidos($_POST['apellidos'])) {
                                if($administrador->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                                    if($administrador->setTelefono($_POST['telefono'])) {
                                        if($administrador->setDireccion($_POST['direccion'])) {
                                            if($administrador->setCorreo($_POST['correo_electronico'])) {
                                                if($administrador->setEstadoCuenta($_POST['id_estado_cuenta'])) {
                                                    if($administrador->setGenero($_POST['id_genero'])) {
                                                        if(is_uploaded_file($_FILES['foto_administrador']['tmp_name'])) {
                                                            if($administrador->setFotoAdministrador($_FILES['foto_administrador'])) {
                                                                if($administrador->updateAdmin($data[0]['foto_administrador'])) {
                                                                    $result['status'] = 1;
                                                                    if ($administrador->saveFile($_FILES['foto_administrador'], $administrador->getRuta(), $administrador->getImageName())) {
                                                                         $result['message'] = 'Administrador modificado correctamente';
                                                                    } else {
                                                                        $result['message'] = 'Administrador modificado pero no se guardó la imagen';
                                                                    }
                                                                } else {
                                                                    $result['exception'] = Database::getException();
                                                                }
                                                            } else {
                                                                 $result['exception'] = $administrador->getImageError();
                                                            }
                                                         } else {
                                                            // print_r($data[0]['foto_administrador']);
                                                            if ($administrador->updateAdmin($data[0]['foto_administrador'])) {
                                                                $result['status'] = 1;
                                                                $result['message'] = 'Administrador actualizado correctamente';
                                                            } else {
                                                                $result['exception'] = Database::getException();
                                                            }
                                                         }
                                                    } else {
                                                        $result['exception'] = 'Seleccione un genero';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Seleccione un estado de cuenta';
                                                }
                                            } else {
                                                $result['exception'] = 'Correo electrónico incorrecto';    
                                            }
                                        } else {
                                            $result['exception'] = 'Dirección incorrecta';
                                        }
                                    } else {
                                        $result['exception'] = 'Teléfono incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Fecha de nacimiento incorrecta';    
                                }
                            } else {
                                $result['exception'] = 'Apellidos incorrectos';
                            }
                        } else {
                            $result['exception'] = 'Nombres incorrectos';
                        }
                    } else {
                        $result['exception'] = 'Administrador inexistente';
                    }
                } else {
                    $result['exception'] = 'Administrador incorrecto';
                }
                break;
            case 'delete':
                if($administrador->setIdAdministrador($_POST['id_administrador'])) {
                    if ($data = $administrador->selectOneAdmin()) {
                        if ($administrador->deleteAdmin()) {
                            $result['status'] = 1;
                            if($administrador->deleteFile($administrador->getRuta(), $data[0]['foto_administrador'])) { 
                                $result['message'] = 'Administrador eliminado correctamente';
                            } else {
                                $result['message'] = 'Administrador eliminado pero no se borró la imagen';
                            }
                        } else {
                            $result['exception'] = Database::getException();
                        }
                    } else {
                        $result['exception'] = Database::getException();
                        // $result['exception'] = 'Administrador inexistente';
                    }
                } else {
                    $result['exception'] = 'Administrador incorrecto';
                }
                break;
            case 'getAdminPicture':
                if(isset($_SESSION['id_administrador'])) {
                    if($administrador->setIdAdministrador($_SESSION['id_administrador'])) {
                        if($data = $administrador->selectOneAdmin()) {
                            $result['status'] = 1;
                            $result['dataset'] = $data;
                        } else {
                            $result['exception'] = 'No se ha podido obtener la foto';  
                        }
                    } else {
                        $result['exception'] = 'Administrador incorrecto';
                    }
                } else {    
                    $result['exception'] = 'Tiene que ingresar como administrador';
                }
                break;

            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
    } else {
        switch ($_GET['action']) {
            case 'readAll':
                if($administrador->selectAdmins()) {
                    $result['status'] = 1;
                    $result['message'] = 'Existe al menos un usuario registrado';
                } else {
                    if (Database::getException()) {
                        $result['error'] = 1;
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No existen usuarios registrados';
                    }
                }
                break;
            case 'logIn':
                $_POST = $administrador->validateForm($_POST);
                if ($data = $administrador->checkUser($_POST['usuario'])) {
                    $administrador->setIdAdministrador($data[0]['id_administrador']);
                    if($administrador->checkPassword($_POST['clave'])) {
                        $result['status'] = 1;
                        $result['message'] = 'Autenticación correcta';
                        $_SESSION['id_administrador'] = $administrador->getIdAdministrador();
                        $_SESSION['usuario'] = $administrador->getUsuario();
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Contraseña incorrecta';
                        }
                    }
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'Usuario inexistente';
                    }
                }
                break;
            case 'create':
                $_POST = $administrador->validateForm($_POST);
                if ($administrador->setNombres($_POST['nombres'])) {
                    if($administrador->setApellidos($_POST['apellidos'])) {
                        if($administrador->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                            if($administrador->setTelefono($_POST['telefono'])) {
                                if($administrador->setDireccion($_POST['direccion'])) {
                                    if($administrador->setCorreo($_POST['correo_electronico'])) {
                                        if(is_uploaded_file($_FILES['foto_administrador']['tmp_name'])) {
                                            if($administrador->setFotoAdministrador($_FILES['foto_administrador'])) {
                                                if($administrador->setUsuario($_POST['usuario'])) {
                                                    if ($_POST['clave'] == $_POST['confirmar_clave']) {
                                                        if($administrador->setClave($_POST['clave'])) {
                                                            if($administrador->setEstadoCuenta($_POST['id_estado_cuenta'])) {
                                                                if($administrador->setGenero($_POST['id_genero'])) {
                                                                    if($administrador->insertAdmin()) {
                                                                        $result['status'] = 1;
                                                                        // print_r($_FILES['foto_administrador']);
                                                                        // print($administrador->getRuta());
                                                                        // print($administrador->getFotoAdministrador());
                                                                        if ($administrador->saveFile($_FILES['foto_administrador'], $administrador->getRuta(), $administrador->getFotoAdministrador())) {
                                                                            $result['message'] = 'Administrador creado correctamente';
                                                                            } else {
                                                                                $result['message'] = 'Administrador creado pero no se guardó la imagen';
                                                                            }
                                                                    } else {
                                                                        $result['exception'] = Database::getException();;
                                                                    }
                                                                } else {
                                                                    $result['exception'] = 'Seleccione un genero';
                                                                }
                                                            } else {
                                                                $result['exception'] = 'Seleccione un estado de cuenta';
                                                            }
                                                        } else {
                                                            $result['exception'] = $administrador->getPasswordError();
                                                        }                                                        
                                                    } else {
                                                        $result['exception'] = 'Claves diferentes';
                                                    }
                                                } else {
                                                    $result['exception'] = 'Usuario incorrecto';
                                                }
                                            } else {
                                                $result['exception'] = $Administrador->getImageError();
                                            }
                                        } else {
                                            $result['exception'] = 'Seleccione una imagen';
                                        }
                                    } else {
                                        $result['exception'] = 'Correo electrónico incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Dirección incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Teléfono incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Fecha de nacimiento incorrecta';    
                        }
                    } else {
                        $result['exception'] = 'Apellidos incorrectos';
                    }
                } else {
                    $result['exception'] = 'Nombres incorrectos';
                }
                break;
            default:
                $result['exception'] = 'Acción no disponible fuera de la sesión';
                break;
        }
    }
    // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}

?>