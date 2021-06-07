<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/ordenes.php');

//Se comprueba que exista una acción a realizar, sino, se muestra un error
if(isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    //Se instancian las clases correspondientes
    $orden = new Ordenes;
    //Se declara el arreglo que usaremos para mandar los resultados al controller
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se evalua la acción a realizar
    switch ($_GET['action']) {
        //Este caso es para crear un detalle o actualizarle la cantidad a uno existente.
        case 'createDetail':
            if(isset($_SESSION['id_cliente'])) {
                //Se crea o se continua una orden
                if($orden->startOrder()) {
                    $_POST = $orden->validateForm($_POST);
                    if($orden->setIdCatalogoProducto($_POST['id_catalogo_producto'])) {
                        if($orden->setCantidad($_POST['cantidad'])) {
                            //Se verifica si ya existe un detalle con ese producto en la orden
                            if($orden->verifyDetail()) {
                                //Se obtiene la cantidad del detalle anterior
                                if($data = $orden->getLastExistence()) {
                                    $_POST['cantidad'] = $_POST['cantidad'] + $data[0]['cantidad'];
                                    if($orden->setCantidad($_POST['cantidad'])) {
                                        //Se verifica que la cantidad no exceda la existencia
                                        if($orden->verifyExistence()) {
                                            if($orden->setSubtotal($_POST['cantidad'])) {
                                                //Se actualiza el detalle
                                                if($orden->updateDetail()) {
                                                    $result['status'] = 1;
                                                    $result['message'] = 'Cantidad agregada al carrito correctamente';    
                                                } else {
                                                    if(Database::getException()) {
                                                        $result['exception'] = Database::getException();
                                                    } else {
                                                        $result['exception'] = 'No se pudo guardar el detalle';
                                                    }
                                                }
                                            } else {
                                                $result['exception'] = 'Ocurrió un error al obtener el subtotal';
                                            }
                                        } else {
                                            $result['exception'] = 'Su cantidad excede a la existencia disponible';
                                        }
                                    } else {
                                        $result['exception'] = 'Cantidad incorrecta';
                                    }
                                } else {
                                    $result['exception'] = 'Ocurrió un error al obtener la cantidad del detalle anterior';
                                }
                            } else {
                                //Se verifica que la cantidad no exceda la existencia
                                if($orden->verifyExistence()) {
                                    if($orden->setSubtotal($_POST['cantidad'])) {
                                        //Se ingresa el detalle
                                        if($orden->insertDetail()) {
                                            $result['status'] = 1;
                                            $result['message'] = 'Producto agregado al carrito correctamente';
                                        } else {
                                            if(Database::getException()) {
                                                $result['exception'] = Database::getException();
                                            } else {
                                                $result['exception'] = 'No se pudo guardar el detalle';
                                            }
                                        }
                                    } else {
                                        $result['exception'] = 'Ocurrió un error al obtener el subtotal';
                                    }
                                } else {
                                    $result['exception'] = 'Su cantidad excede a la existencia disponible';
                                }
                            }
                        } else {
                            $result['exception'] = 'Cantidad incorrecta';
                        }
                    } else {
                        $result['exception'] = 'Producto incorrecto';
                    }
                } else {
                    $result['exception'] = 'Ocurrió un problema al obtener el pedido';
                }
            } else {
                $result['exception'] = 'Antes tiene que ingresar o crearse una cuenta.';
            }
            break;
        //Este caso es para mostrar los productos del carrito
        case 'readCarrito':
            if($orden->startOrder()) {
                $_SESSION['id_orden_compra'] = $orden->getIdOrdenCompra();
                if ($result['dataset'] =$orden->readCarrito()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No tiene productos en el carrito';
                    }
                }
            } else {
                $result['exception'] = 'Ocurrió un problema al obtener el pedido';
            }
            break;
        //Este caso es para eliminar algún producto del carrito
        case 'deleteDetail':
            if($orden->setIdOrdenDetalle($_POST['id_orden_detalle'])) {
                if($orden->deleteDetail()) {
                    $result['status'] = 1;
                    $result['message'] = 'Producto eliminado del carrito correctamente';
                } else {
                    $result['exception'] = 'No se pudo eliminar el producto del carrito';    
                }
            } else {
                $result['exception'] = 'Detalle incorrecto';
            }
        //Este caso es para mostrar la información del pedido en proceso
        case 'readOrderInfo':
            if ($result['dataset'] =$orden->readOrderInfo()) {
                $result['status'] = 1;
            } else {
                if (Database::getException()) {
                    $result['exception'] = Database::getException();
                } else {
                    $result['exception'] = 'No tiene productos en el carrito';
                }
            }
            break;
        //Este caso es para realizar el pedido
        case 'makeOrder':
            if($orden->startOrder()) {
                $_SESSION['id_orden_compra'] = $orden->getIdOrdenCompra();
                $orderInfo = $orden->readOrderInfo();
                if($orden->setTotal($orderInfo[0]['sum'])) {
                    //Se verifica si la el pedido es un regalo
                    if(isset($_POST['orden_regalo'])) {
                        if($orden->setOrdenRegalo($_POST['orden_regalo'])) {
                            //Se verifiica si existe un comentario del pedido
                            if(isset($_POST['comentario'])) {
                                if($orden->setComentario($_POST['comentario'])) {
                                    //Se realiza la orden
                                    if($orden->makeOrder()) {
                                        if($carrito = $orden->readCarrito()) {
                                            
                                            $contador = 0;
                                            
                                            //Se descuentan los productos del inventario
                                            foreach ($carrito as &$detalle) {
                                                $orden->setIdCatalogoProducto($detalle['id_catalogo_producto']);
                                                $orden->setCantidad($detalle['cantidad']);
                                                if($orden->updateExistence()) {
                                                    $contador++;
                                                } else {
                                                    $result['exception'] = 'Ha ocurrido un error al momento de descontar los productos del inventario';    
                                                }
                                            }
                                            unset($detalle); // rompe la referencia con el último elemento
                                            
                                            if($contador == count($carrito)){
                                                 $result['status'] = 1;
                                                $result['message'] = 'Su pedido se ha realizado correctamente';
                                            } else {
                                                $result['exception'] = 'Su pedido no se realizó correctamente';
                                            }
                                        } else {
                                            $result['exception'] = 'No se ha podido obtener el carrito';    
                                        }
                                    } else {
                                        $result['exception'] = 'No se ha podido realizar su pedido';
                                    }
                                } else {
                                    $result['exception'] = 'Comentario incorrecto';
                                }
                            } else {
                                //Se realiza el pedido sin comentario
                                if($orden->setComentario('')) {
                                    //Se realiza la orden
                                    if($orden->makeOrder()) {
                                        if($carrito = $orden->readCarrito()) {
                                            
                                            $contador = 0;
                                            
                                            //Se descuentan los productos del inventario
                                            foreach ($carrito as &$detalle) {
                                                $orden->setIdCatalogoProducto($detalle['id_catalogo_producto']);
                                                $orden->setCantidad($detalle['cantidad']);
                                                if($orden->updateExistence()) {
                                                    $contador++;
                                                } else {
                                                    $result['exception'] = 'Ha ocurrido un error al momento de descontar los productos del inventario';    
                                                }
                                            }
                                            unset($detalle); // rompe la referencia con el último elemento
        
                                            if($contador == count($carrito)){
                                                 $result['status'] = 1;
                                                $result['message'] = 'Su pedido se ha realizado correctamente';
                                            } else {
                                                $result['exception'] = 'Su pedido no se realizó correctamente';
                                            }
                                        } else {
                                            $result['exception'] = 'No se ha podido obtener el carrito';    
                                        }
        
                                    } else {
                                        $result['exception'] = 'No se ha podido realizar su pedido';
                                    }
                                } else {
                                    $result['exception'] = 'Comentario incorrecto';
                                }
                            }
                        } else {
                            $result['exception'] = 'No se ha podido verificar si el pedido es un regalo';
                        }
                    } else {
                        //Se crea el pedido cuando no es un regalo
                        if(isset($_POST['comentario'])) {
                            //Se verifiica si existe un comentario del pedido
                            if($orden->setComentario($_POST['comentario'])) {
                                //Se realiza la orden
                                if($orden->makeOrder()) {
                                    if($carrito = $orden->readCarrito()) {
                                        
                                        $contador = 0;
                                        
                                        //Se descuentan los productos del inventario
                                        foreach ($carrito as &$detalle) {
                                            $orden->setIdCatalogoProducto($detalle['id_catalogo_producto']);
                                            $orden->setCantidad($detalle['cantidad']);
                                            if($orden->updateExistence()) {
                                                $contador++;
                                            } else {
                                                $result['exception'] = 'Ha ocurrido un error al momento de descontar los productos del inventario';    
                                            }
                                        }
                                        unset($detalle); // rompe la referencia con el último elemento
                                        
                                        if($contador == count($carrito)){
                                             $result['status'] = 1;
                                            $result['message'] = 'Su pedido se ha realizado correctamente';
                                        } else {
                                            $result['exception'] = 'Su pedido no se realizó correctamente';
                                        }
                                    } else {
                                        $result['exception'] = 'No se ha podido obtener el carrito';    
                                    }
                                } else {
                                    $result['exception'] = 'No se ha podido realizar su pedido';
                                }
                            } else {
                                $result['exception'] = 'Comentario incorrecto';
                            }
                        } else {
                            //Se realiza el pedido sin comentario
                            if($orden->setComentario('')) {
                                //Se realiza la orden
                                if($orden->makeOrder()) {
                                    if($carrito = $orden->readCarrito()) {
                                        
                                        $contador = 0;
    
                                        //Se descuentan los productos del inventario
                                        foreach ($carrito as &$detalle) {
                                            $orden->setIdCatalogoProducto($detalle['id_catalogo_producto']);
                                            $orden->setCantidad($detalle['cantidad']);
                                            if($orden->updateExistence()) {
                                                $contador++;
                                            } else {
                                                $result['exception'] = 'Ha ocurrido un error al momento de descontar los productos del inventario';    
                                            }
                                        }
                                        unset($detalle); // rompe la referencia con el último elemento
    
                                        if($contador == count($carrito)){
                                             $result['status'] = 1;
                                            $result['message'] = 'Su pedido se ha realizado correctamente';
                                        } else {
                                            $result['exception'] = 'Su pedido no se realizó correctamente';
                                        }
                                    } else {
                                        $result['exception'] = 'No se ha podido obtener el carrito';    
                                    }
    
                                } else {
                                    $result['exception'] = 'No se ha podido realizar su pedido';
                                }
                            } else {
                                $result['exception'] = 'Comentario incorrecto';
                            }
                        }
                    }
                } else {
                    $result['exception'] = 'No se pudo obtener el total de su pedido';    
                }
            } else {
                $result['exception'] = 'Ocurrió un problema al obtener el pedido';
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