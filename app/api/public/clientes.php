<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/clientes.php');

// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $clientes = new Clientes;
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'recaptcha' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como cliente para realizar las acciones correspondientes.
    if (isset($_SESSION['id_cliente'])) {
        // Se compara la acción a realizar cuando un cliente ha iniciado sesión.
        // print_r($_GET['action']);
        switch ($_GET['action']) {
            case 'logOut':
                unset($_SESSION['id_cliente']);
                if ( isset($_SESSION['id_cliente'])) {

                    $result['exception'] = 'Ocurrió un problema al cerrar la sesión';

                } else {
                    $result['status'] = 1;
                    $result['message'] = 'Sesión eliminada correctamente';

                }
                break;
            default:
                $result['exception'] = ' no disponible dentro de la sesión';
        }
    } else {
        // Se compara la acción a realizar cuando el cliente no ha iniciado sesión.
        // print_r($_GET['action']);
        // print('aaaaa');
        switch ($_GET['action']) {
            case 'register':
                $_POST = $clientes->validateForm($_POST);
                // Se sanea el valor del token para evitar datos maliciosos.
                $token = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_STRING);
                if ($token) {
                    $secretKey = '6LeP7lMcAAAAAG_BUYh_nANMlfM3sWe4KPfAA-TW';
                    $ip = $_SERVER['REMOTE_ADDR'];

                    $data = array(
                        'secret' => $secretKey,
                        'response' => $token,
                        'remoteip' => $ip
                    );

                    $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($data)
                        ),
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false
                        )
                    );

                    $url = 'https://www.google.com/recaptcha/api/siteverify';
                    $context  = stream_context_create($options);
                    $response = file_get_contents($url, false, $context);
                    $captcha = json_decode($response, true);

                    if ($captcha['success']) {
                        if ($clientes->setNombres($_POST['nombres'])) {
                            if ($clientes->setApellidos($_POST['apellidos'])) {
                                if ($clientes->setFechaNacimiento($_POST['fecha_nacimiento'])) {
                                    if ($clientes->setTelefono($_POST['telefono'])) {
                                        if ($clientes->setDireccion($_POST['direccion'])) {
                                            if ($clientes->setCorreo($_POST['correo_electronico'])) {
                                                if ($_POST['clave'] == $_POST['confirmar_clave']) {
                                                    if ($clientes->setClave($_POST['clave'])) {
                                                        // if ($clientes->setIdEstadoCuenta($_POST['id_estado_cuenta'])) {
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
                                                        // } else {
                                                        //     $result['exception'] = 'Estado incorrecto';
                                                        // }
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
                    } else {
                        $result['recaptcha'] = 1;
                        $result['exception'] = 'No eres un humano';
                    }
                } else {
                    $result['exception'] = 'Ocurrió un problema al cargar el reCAPTCHA';
                }
                break;
            case 'logIn':
                $_POST = $clientes->validateForm($_POST);
                if ($clientes->checkUser($_POST['usuario'])) {
                    if ($clientes->getEstadoCuenta()) {
                        if ($clientes->checkPassword($_POST['clave'])) {
                            $_SESSION['id_cliente'] = $clientes->getIdCliente();
                            $_SESSION['correo_electronico'] = $clientes->getCorreo();
                            $result['status'] = 1;
                            $result['message'] = 'Autenticación correcta';
                        } else {
                            if (Database::getException()) {
                                $result['exception'] = Database::getException();
                            } else {
                                $result['exception'] = 'Clave incorrecta';
                            }
                        }
                    } else {
                        $result['exception'] = 'La cuenta ha sido desactivada';
                    }
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'Alias incorrecto';
                    }
                }
                break;
            default:
                // print('eeee');
                $result['exception'] = 'Acción no disponible fuera de la sesión';
        }
    }
    // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}
