<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/catalogo.php');
require_once('../../models/categorias.php');
require_once('../../models/comentarios.php');

//Se comprueba que exista una acción a realizar, sino, se muestra un error
if(isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    //Se instancian las clases correspondientes
    $categoria = new Categorias;
    $catalogo = new Catalogo;
    $comentario = new Comentarios;
    //Se declara el arreglo que usaremos para mandar los resultados al controller
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se evalua la acción a realizar
    switch ($_GET['action']) {
        case 'readAll':
        //Este caso es para mostrar todas las categorías
            if ($result['dataset'] = $categoria->SelectCategoria()) {
                $result['status'] = 1;
            } else {
                if (Database::getException()) {
                    $result['exception'] = Database::getException();
                } else {
                    $result['exception'] = 'No existen categorías para mostrar';
                }
            }
            break;
        case 'readProductosCategoria':
        //Este caso es para mostrar los productos de la categoría indicada
            if($categoria->setIdCategoria($_POST['id_categoria'])) {
                if ($result['dataset'] = $categoria->readProductosCategoria()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No existen productos para mostrar';
                    }
                }
            } else {
                $result['exception'] = 'Categoría incorrecta';
            }
            break;
        case 'readOneProduct': 
        //Este caso es para obtener la información de un producto
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
        case 'readCommentsProduct':
        //Este caso es para obtener los comentarios del producto
            if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                if($result['dataset'] = $catalogo->selectCommentsProducto()) {
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
        case 'createComment':
        //Este caso es para guardar los comentarios
            $_POST = $comentario->validateForm($_POST);
            if(isset($_SESSION['id_cliente'])) {
                if($comentario->setIdCliente($_SESSION['id_cliente'])) {
                    if($comentario->setComentario($_POST['comentario'])) {
                        if($comentario->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                            if($comentario->setValoracion($_POST['valoracion'])) {
                                if($comentario->insertComment()) {
                                    $result['status'] = 1;
                                    $result['message'] = 'Comentario registrado correctamente';
                                } else {
                                    if(Database::getException()) {
                                        $result['exception'] = Database::getException();
                                    } else {
                                        $result['exception'] = 'Comentario no registrada';
                                    }
                                }
                            } else {
                                $result['exception'] = 'Valoración incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Producto incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Comentario incorrecto';
                    }
                } else {
                    $result['exception'] = 'Usuario incorrecto';
                }
            } else {
                $result['exception'] = 'Antes tiene que ingresar o crearse una cuenta.';
            }
            break;
        //Este caso es para mostrar los favoritos de un usuario
        case 'readFavoritos':
            if(isset($_SESSION['id_cliente'])) {
                if($result['dataset'] = $catalogo->readFavoritos()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'Producto inexistente';
                    }
                }
            } else {
                $result['exception'] = 'Antes tiene que ingresar o crearse una cuenta.';
            }
            break;
        //Este caso es para agregar un producto a favoritos
        case 'createFavorito':
            if(isset($_SESSION['id_cliente'])) {
                if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])){
                    if($catalogo->verifyFavorito() == null) {
                        if($catalogo->createFavorito()) {
                            $result['status'] = 1;
                            $result['message'] = 'Producto agregado a favoritos';
                        } else {
                            if(Database::getException()) {
                                $result['exception'] = Database::getException();
                            } else {
                                $result['exception'] = 'Producto inexistente';
                            }
                        }
                    } else {
                        $result['exception'] = 'Este producto ya pertenece a sus favoritos';    
                    }
                } else {
                    $result['exception'] = 'Producto incorrecto';    
                }
            } else {
                $result['exception'] = 'Antes tiene que ingresar o crearse una cuenta.';
            }
            break;
        //Este caso es para eliminar un producto de los favoritos
        case 'deleteFavorito':
            if($catalogo->setIdCatalogoProducto($_POST['id_catalogo_producto'])){
                if($catalogo->deleteFavorito()) {
                    $result['status'] = 1;
                    $result['message'] = 'Producto eliminado de favoritos';
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
        //Este caso es para realizar la busqueda de productos
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
        default: 
            $result['exception'] = 'Acción no disponible dentro de la sesión';
            break;
    }
    // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}

?>