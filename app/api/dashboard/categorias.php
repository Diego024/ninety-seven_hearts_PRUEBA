<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/categorias.php');

// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $categoria = new Categorias;
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como administrador, de lo contrario se finaliza el script con un mensaje de error.
    if (isset($_SESSION['id_administrador'])) {
    // if(true){
        // Se compara la acción a realizar cuando un administrador ha iniciado sesión.
        //print($_GET['action']);
        switch ($_GET['action']) {
            case 'readAll':
                if($result['dataset'] = $categoria->SelectCategoria()) {
                    //print_r($result['dataset'] = $categoria->SelectCategoria());
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException(); 
                    } else {
                        $result['exception'] = 'No hay categorías registradas';
                    }
                }
            break;
            case 'search':
                $_POST = $categoria->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $categoria->searchCategorias($_POST['search'])) {
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
                $_POST = $categoria->validateForm($_POST);
                    if($categoria->setCategoria($_POST['categoria'])) {
                        if($categoria->setDescripcionCategoria($_POST['descripcion_categoria'])) {
                            if (is_uploaded_file($_FILES['archivo_categoria']['tmp_name'])) {
                                if ($categoria->setFotoCategoria($_FILES['archivo_categoria'])) {
                                    if ($categoria->InsertCategoria()) {
                                        $result['status'] = 1;
                                        if ($categoria->saveFile($_FILES['archivo_categoria'], $categoria->getRuta(), $categoria->getFotoCategoria())) {
                                            $result['message'] = 'Categoría creada correctamente';
                                        } else {
                                            $result['message'] = 'Categoría creada pero no se guardó la imagen';
                                        }
                                    } else {
                                        $result['exception'] = Database::getException();
                                    }
                                } else {
                                    $result['exception'] = $categoria->getImageError();
                                }
                            } else {
                                $result['exception'] = 'Seleccione una imagen';
                            }
                        } else {
                            $result['exception'] = 'Descripción incorrecta';
                        }
                    } else {
                        $result['exception'] = 'Categoría incorrecta';
                    }
            break;    
            case 'readOne':
                if ($categoria->setIdCategoria($_POST['id_categoria'])) {
                    if ($result['dataset'] = $categoria->SelectOneCategoria()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Categoría inexistente';
                        }
                    }
                } else {
                    $result['exception'] = 'Categoría incorrecta';
                }
            break;
            case 'update':
                $_POST = $categoria->validateForm($_POST);
                if($categoria->setIdCategoria($_POST['id_categoria'])) {
                    if($data = $categoria->SelectOneCategoria()) {
                        if($categoria->setCategoria($_POST['categoria'])) {
                            if($categoria->setDescripcionCategoria($_POST['descripcion_categoria'])) {
                                if (is_uploaded_file($_FILES['archivo_categoria']['tmp_name'])) {
                                    if ($categoria->setFotoCategoria($_FILES['archivo_categoria'])) {
                                        if ($categoria->updateCategoria($data[0]['foto_categoria'])) {
                                            $result['status'] = 1;
                                            if ($categoria->saveFile($_FILES['archivo_categoria'], $categoria->getRuta(), $categoria->getFotoCategoria())) {
                                                $result['message'] = 'Categoría modificada correctamente';
                                            } else {
                                                $result['message'] = 'Categoría modificada pero no se guardó la imagen';
                                            }
                                        } else {
                                            $result['exception'] = Database::getException();
                                        }
                                    } else {
                                        $result['exception'] = $categoria->getImageError();
                                    }
                                } else {
                                    if ($categoria->updateCategoria($data[0]['foto_categoria'])) {
                                        //print_r($categoria->updateCategoria($data['foto_categoria']));
                                        $result['status'] = 1;
                                        $result['message'] = 'Categoría modificada correctamente';
                                    } else {
                                        $result['exception'] = Database::getException();
                                    }
                                }
                            } else {
                                $result['exception'] = 'Descripción incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Categoría incorrecta';
                        }
                    } else {
                        $result['message'] = 'Categoría inexistente';
                    }
                } else {
                    $result['exception'] = 'Categoría incorrecta';    
                }
            break;
            case 'delete': 
                if($categoria->setIdCategoria($_POST['id_categoria'])) {
                    if($data = $categoria->SelectOneCategoria()) {
                        if($categoria->deleteCategoria()) {
                            $result['status'] = 1;
                            $result['message'] = 'Categoría eliminada correctamente';
                        } else {
                            $result['message'] = Database::getException(); 
                        }
                    } else {
                        $result['message'] = 'Categoría inexistente';
                    }
                } else {
                    $result['message'] = 'Categoría incorrecta';
                }
            break;
            case 'getCategoriasMasVendidas':
                if($result['dataset'] = $categoria->getCategoriasMasVendidas()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay datos disponibles';
                    }
                }
            break;
            case 'getCategoriasEnCatalogo':
                if($result['dataset'] = $categoria->getCategoriasEnCatalogo()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay datos disponibles';
                    }
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