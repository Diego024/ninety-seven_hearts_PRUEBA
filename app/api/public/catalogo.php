<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/catalogo.php');
require_once('../../models/categorias.php');
require_once('../../models/comentarios.php');

//Se comprueba que exista una acción a realizar, sino, se muestra un error
if(isset($_GET['action'])) {
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
            // if(isset($_SESSION['id_cliente'])) {
            if(true) {
                // if($comentario->setIdCliente($_SESSION['id_cliente'])) {
                if($comentario->setIdCliente(1)) {
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
    }
    // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}

?>