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
    $result = array('status' => 0, 'message' => null, 'exception' => null, 'isPasswordIncorrect' => null);
    //Se verifica que haya una sesión iniciada por un administrador
    if ( isset($_SESSION['id_administrador'])) {
    // if () {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'logOut':
                $administrador->changeState($_SESSION['usuario'], 1);
                unset($_SESSION['id_administrador']);
                if ( isset($_SESSION['id_administrador'])) {
                    $result['exception'] = 'Ocurrió un problema al cerrar la sesión';

                } else {
                    $result['status'] = 1;
                    $result['message'] = 'Sesión eliminada correctamente';

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

            //Caso para cambiar la contraseña de los administradores
            case 'changePassword':
                $_POST = $administrador->validateForm($_POST);
                //Se verifica que la contraseña cumpla con los requisitos
                if($administrador->setClave($_POST['nueva_clave'])){
                    //Se pasa el id del admin al modelo
                    if($administrador->setIdAdministrador($_SESSION['id_administrador'])) {
                        //Se comprueba que la contraseña actual sea correcta
                        if($administrador->checkPassword($_POST['clave_actual'])) {
                            //Se comprueba que las contraseña nueva coincide con la confirmación
                            if($_POST['nueva_clave'] == $_POST['confirmacion']) {
                                //Se comprueba que la nueva contraseña no sea igual que la anterior
                                if(!$administrador->checkPassword($_POST['nueva_clave'])) {
                                    // Actualizar la contraseña del usuario
                                    if($administrador->updatePassword()) {
                                        $result['status'] = 1;
                                        $result['message'] = 'La contraseña se modificó correctamente.';
                                    } else {
                                        if ( Database::getException()) {
                                            $result['exception'] = Database::getException();
                                        } else {
                                            $result['exception'] = 'La contraseña no pudo ser modificada.';
                                        }
                                    }
                                } else {
                                    $result['exception'] = 'La nueva contraseña no puede ser igual a la anterior. Verifique sus datos.';        
                                }
                            } else {
                                $result['exception'] = 'Las contraseñas no coinciden. Verifique sus datos.';    
                            }
                        } else {
                            $result['exception'] = 'Parece que su contraseña actual es incorrecta. Verifique sus datos.';
                        }
                    } else {
                        $result['exception'] = 'Asegúrese de haber iniciado sesión.';    
                    }
                } else {
                    $result['exception'] = 'Asegúrese que su contraseña cumpla con las específicaciones indicadas.';
                }
                break;
            //Caso para obtener el historial de inicios de sesión
            case 'getRecords':
                if ($result['dataset'] = $administrador->getRecords()) {
                    $result['status'] = 1;
                } else {
                    if ( Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay inicios de sesión registrados.';
                    }
                }
                break;
            //Caso para búsqueda filtrada en el historial
            case 'searchRecord': 
                $_POST = $administrador->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $administrador->searchRecord($_POST['search'])) {
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
            //Caso por defecto
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
            // Caso para bloquear el administrador después de 3 intentos fallidos
            case 'blockAdmin': 
                if($administrador->changeState($_POST['usuario'], 3)) {
                    $result['status'] = 1;
                    $result['exception'] = 'Su usuario ha sido bloqueado después de 3 intentos fallidos.';
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No se pudo bloquear correctamente el usuario';
                    }
                }
                break;
            case 'logIn':
                $_POST = $administrador->validateForm($_POST);
                if ($data = $administrador->checkUser($_POST['usuario'])) {
                    $administrador->setIdAdministrador($data[0]['id_administrador']);
                    if($administrador->checkPassword($_POST['clave'])) {
                        $_SESSION['id_administrador'] = $administrador->getIdAdministrador();
                        $_SESSION['usuario'] = $administrador->getUsuario();
                        if($dia = $administrador->checkLastPasswordUpdate()) {
                            if($dia[0]['dias'] > 90) {
                                $result['status'] = 2;
                                $result['message'] = 'Su contraseña no se ha actualizado en 3 meses, por favor actualice su contraseña.';
                            } else {
                                $result['status'] = 1;
                                $result['message'] = 'Autenticación correcta';
                                $administrador->createRecord();
                                $administrador->changeState($_POST['usuario'], 4);
                            }
                        } else {
                            $result['exception'] = 'No se pudo verificar la última actualización de la contraseña del usuario.';
                        }
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Contraseña incorrecta';
                            $result['isPasswordIncorrect'] = true;
                        }
                    }
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'Usuario incorrecto, usuario bloqueado o usuario actualmente en uso. Consulte con el administrador.';
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
