<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/catalogo.php');

//Se comprueba que sí exista una acción a realizar
if(isset($_GET['action'])) {
    //Se inicializa una sesión o se continua la que está
    session_start();
    //Creamos un objeto de la clase del modelo
    $catalogo = new Catalogo;
    //Creamos un array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada por un administrador
    // if ( isset($_SESSION['id_cliente'])) {
    if(true) {
        //Se evalua la acción a realizar
        switch ($_GET['action']) {
            case 'readAll':
                if($result['dataset'] = $catalogo->selectNovedades()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException(); 
                    } else {
                        $result['exception'] = 'No hay novedades que mostrar';
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
        //print_r($result);
        print(json_encode($result));
    } else {
        print(json_encode('Acceso denegado'));
    }
} else {
    print(json_encode('Recurso no disponible'));
}
?>