<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/comentarios.php');

//Se comprueba que sí exista una acción a realizar
if(isset($_GET['action'])) {
    //Se inicializa una sesión o se continua la que está
    session_start();
    //Creamos un objeto de la clase del modelo
    $comentario = new Comentarios;
    //Creamos un array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada por un administrador
    // if ( isset($_SESSION['id_administrador'])) {
    if(true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if($result['dataset'] = $comentario->selectComments()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException(); 
                    } else {
                        $result['exception'] = 'No hay comentarios registradas';
                    }
                }
            break;
            case 'readOne':
                if($comentario->setIdComentario($_POST['id_comentario'])) {
                    if($result['dataset'] = $comentario->selectOneComment()) {
                        $result['status'] = 1;
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Comentario no registrada';
                        }
                    }
                } else {
                    $result['exception'] = 'Comentario incorrecto';
                }
            break;
            case 'update':
                $_POST = $comentario->validateForm($_POST);
                if($comentario->setIdComentario($_POST['id_comentario'])) {
                    if($comentario->selectOneComment()) {
                        if(isset($_POST['id_estado_comentario'])) {
                            if($comentario->setIdEstadoComentario($_POST['id_estado_comentario'])) {
                                if($comentario->updateComment()) {
                                    $result['status'] = 1;
                                    $result['message'] = 'Comentario actualizado correctamente';
                                } else {
                                    $result['message'] = Database::getException();
                                }
                            } else {
                                $result['exception'] = 'Estado incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Seleccione un estado';
                        }
                    } else {
                        $result['exception'] = 'Comentario inexistente';
                    }
                } else {
                    $result['exception'] = 'Comentario incorrecto';    
                }
            break;
            case 'delete':
                if($comentario->setIdComentario($_POST['id_comentario'])) {
                    if($data = $comentario->selectOneComment()) {
                        if($comentario->deleteComment()) {
                            $result['status'] = 1;
                            $result['message'] = 'Comentario eliminado correctamente';
                        } else {
                            $result['message'] = Database::getException(); 
                        }
                    } else {
                        $result['message'] = 'Comentario inexistente';
                    }
                } else {
                    $result['message'] = 'Comentario incorrecto';
                }    
            break;
            default: 
                $result['exception'] = 'Acción no disponible dentro de la sesión'; 
            break;
        }
        // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
        header('content-type: application/json; charset=utf-8');
        // Se imprime el resultado en formato JSON y se retorna al controlador.
        print(json_encode($result));
    } else {
        print(json_encode('Acceso denegado'));
    }
} else {
    print(json_encode('Recurso no disponible'));
}
?>