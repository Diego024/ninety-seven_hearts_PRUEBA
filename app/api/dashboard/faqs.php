<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/faqs.php');

//Se comprueba que sí exista una acción a realizar
if(isset($_GET['action'])) {
    //Se inicializa una sesión o se continua la que está
    session_start();
    //Creamos un objeto de la clase del modelo
    $faq = new Faqs;
    //Creamos un array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada por un administrador
    // if ( isset($_SESSION['id_administrador'])) {
    if(true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if($result['dataset'] = $faq->selectFaqs()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException(); 
                    } else {
                        $result['exception'] = 'No hay FAQs registradas';
                    }
                }
            break;
            case 'create':
                $_POST = $faq->validateForm($_POST);
                if($faq->setPregunta($_POST['pregunta'])) {
                    if($faq->setRespuesta($_POST['respuesta'])) {
                        if($faq->insertFaq()) {
                            $result['status'] = 1;
                            $result['message'] = 'FAQ registrada correctamente';
                        } else {
                            $result['message'] = 'La FAQ no se guardó correctamente';
                        }
                    } else {
                        $result['exception'] = 'Respuesta incorrecta';
                    }
                } else {
                    $result['exception'] = 'Pregunta incorrecta';
                }
            break;
            case 'readOne':
                if($faq->setIdFaq($_POST['id_faq'])) {
                    if($result['dataset'] = $faq->selectOneFaq()) {
                        $result['status'] = 1;
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'FAQ no registrada';
                        }
                    }
                } else {
                    $result['exception'] = 'FAQ incorrecto';
                }
            break;
            case 'update':
                $_POST = $faq->validateForm($_POST);
                if($faq->setIdFaq($_POST['id_faq'])) {
                    if($faq->selectOneFaq()) {
                        if($faq->setPregunta($_POST['pregunta'])) {
                            if($faq->setRespuesta($_POST['respuesta'])) {
                                if($faq->updateFaq()) {
                                    $result['status'] = 1;
                                    $result['message'] = 'FAQ actualizada correctamente';
                                } else {
                                    $result['message'] = Database::getException();
                                }
                            } else {
                                $result['exception'] = 'Respuesta incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Pregunta incorrecta';
                        }
                    } else {
                        $result['message'] = 'FAQ inexistente';
                    }
                } else {
                    $result['exception'] = 'FAQ incorrecta';    
                }
            break;
            case 'delete': 
                if($faq->setIdFaq($_POST['id_faq'])) {
                    if($data = $faq->selectOneFaq()) {
                        if($faq->deleteFaq()) {
                            $result['status'] = 1;
                            $result['message'] = 'FAQ eliminada correctamente';
                        } else {
                            $result['message'] = Database::getException(); 
                        }
                    } else {
                        $result['message'] = 'FAQ inexistente';
                    }
                } else {
                    $result['message'] = 'FAQ incorrecta';
                }
            break;
            default: 
                $result['exception'] = 'Acción no disponible dentro de la sesión'; 
            break;
        }
        // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
        header('content-type: application/json; charset=utf-8');
        // Se imprime el resultado en formato JSON y se retorna al controlador.
        //print_r($result);
        print(json_encode($result));
    } else {
        print(json_encode('Acceso denegado'));
    }
} else {
    print(json_encode('Recurso no disponible'));
}
?>