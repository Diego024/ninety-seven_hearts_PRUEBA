<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/catalogo.php');

//Se comprueba que exista una acción a realizar
if(isset($_GET['action'])) {
    //Se inicializa o se continua la sesión actual
    session_start();
    //Creamos un objeto de la case del model
    $catalogo = new Catalogo;
    //Creamos el array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada como administrador
    if(isset($_SESSION['id_administrador'])) {
    // if(true) {
        //Se evalua la acción a realizar
        switch($_GET['action']) {
            case 'readLowStock':
                if($result['dataset'] = $catalogo->selectLowStock()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay productos con poca existencia';
                    }
                }
                break;
            case 'readAll':
                if($result['dataset'] = $catalogo->selectProducts()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay productos registrador';
                    }
                }
                break;
            case 'search':
                $_POST = $catalogo->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $catalogo->searchProducts($_POST['search'])) {
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
                // print_r($_POST);
                $_POST = $catalogo->validateForm($_POST);
                if($catalogo->setCatalogoProducto($_POST['catalogo_producto'])) {
                    if($catalogo->setDescripcion($_POST['descripcion'])) {
                        if($catalogo->setExistencia($_POST['existencia'])) {
                            if($catalogo->setPrecioVenta($_POST['precio_venta'])) {
                                if(isset($_POST['id_categoria'])) {
                                    if($catalogo->setIdCategoria($_POST['id_categoria'])) {
                                        if(is_uploaded_file($_FILES['foto_producto']['tmp_name'])) {
                                            if($catalogo->setFotoProducto($_FILES['foto_producto'])) {
                                                if($catalogo->insertProducts()) {
                                                    $result['status'] = 1;
                                                    if($catalogo->saveFile($_FILES['foto_producto'], $catalogo->getRuta(), $catalogo->getFotoProducto())) {
                                                        $result['message'] = 'Producto creado correctamente';
                                                    } else {
                                                        $result['message'] = 'Producto creado pero no se guardó la imagen';
                                                    }
                                                } else {
                                                    $result['exception'] = Database::getException();
                                                }
                                            } else {
                                                $result['exception'] = $catalogo->getImageError();
                                            }
                                        } else {
                                            $result['exception'] = 'Seleccione una imagen';
                                        }
                                    } else {
                                        $result['exception'] = 'Categoría incorrecta';    
                                    }
                                } else {
                                    $result['exception'] = 'Seleccione una categoría';    
                                }
                            } else {
                                $result['exception'] = 'Precio de venta incorrecto';
                            }
                        } else {
                            $result['exception'] = 'Existencia incorrecta';
                        }
                    } else {
                        $result['exception'] = 'Descripción incorrecta';
                    }
                } else {
                    $result['exception'] = 'Nombre de producto incorrecto';
                }
                break;
            case 'readOne':
                if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                    if($result['dataset'] = $catalogo->selectOneProduct()) {
                        $result['status'] = 1;
                    } else {
                        if(Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Producto inexistente';
                        }
                    }
                } else {
                    $result['exception'] = 'Producto incorrecto';
                }
                break;
            case 'update':
                $_POST = $catalogo->validateForm($_POST);
                if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                    if($data = $catalogo->selectOneProduct()) {
                        if($catalogo->setCatalogoProducto($_POST['catalogo_producto'])) {
                            if($catalogo->setDescripcion($_POST['descripcion'])) {
                                if($catalogo->setExistencia($_POST['existencia'])) {
                                    if($catalogo->setPrecioVenta($_POST['precio_venta'])) {
                                        if(isset($_POST['id_categoria'])) {
                                            if($catalogo->setIdCategoria($_POST['id_categoria'])) {
                                                if(is_uploaded_file($_FILES['foto_producto']['tmp_name'])) {
                                                    if($catalogo->setFotoProducto($_FILES['foto_producto'])) {
                                                        if($catalogo->updateProduct($data[0]['foto_producto'])){
                                                            $result['status'] = 1;
                                                            if($catalogo->saveFile($_FILES['foto_producto'], $catalogo->getRuta(), $catalogo->getImageName())) {
                                                                $result['message'] = 'Producto modificado correctamente';
                                                            } else {
                                                                $result['message'] = 'Producto modificado pero no se guardó la imagen';
                                                            }
                                                        } else {
                                                            $result['exception'] = Database::getException();
                                                        }
                                                    } else {
                                                        $result['exception'] = $catalogo->getImageError();
                                                    }
                                                } else {
                                                    if($catalogo->updateProduct($data[0]['foto_producto'])) {
                                                        $result['status'] = 1;
                                                        $result['message'] = 'Producto actualizado correctamente';
                                                    } else {
                                                        $result['exception'] = Database::getException();
                                                    }
                                                }
                                            } else {
                                                $result['exception'] = 'Categoría incorrecta';
                                            }
                                        } else {
                                            $result['exception'] = 'Seleccione una categoría válida';
                                        }
                                    } else {
                                        $result['exception'] = 'Precio de venta incorrecto';
                                    }
                                } else {
                                    $result['exception'] = 'Existencia incorrecta';
                                }
                            } else {
                                $result['exception'] = 'Descripción incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Nombre de producto incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Producto inexistente';    
                    }
                } else {
                    $result['exception'] = 'Producto incorrecto';
                }
                break;
            case 'delete':
                if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                    if( $data = $catalogo->selectOneProduct()) {
                        if($catalogo->deleteProduct()) {
                            $result['status'] = 1;
                            if($catalogo->deleteFile($catalogo->getRuta(), $data[0]['foto_producto'])) {
                                $result['message'] = 'Producto eliminado correctamente';
                            } else {
                                $result['message'] = 'Producto eliminado pero no se borró la imagen';
                            }
                        } else {
                            $result['exception'] = Database::getException();
                        }
                    }
                } else {
                    $result['exception'] = 'Producto incorrecto';
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

?>