<?php

require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/categorias.php');

//Se comprueba que exista una acción a realizar
if(isset($_GET['action'])) {
    //Se inicializa o se continua la sesión actual
    session_start();
    //Se crea un objeto de la clase del modelo
    $categoria = new Categorias;
    //Creamos el array donde guardaremos los resultados de la API
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica que haya una sesión iniciada como administrador
    // if(isset($_SESSION['id_administrador'])) {
    if(true) {
        //Se evalua la acción a realizar
        switch($_GET['action']) {
            case 'readAll': 
                if($result['dataset'] = $categoria->selectCategories()) {
                    $result['status'] = 1;
                } else {
                    if(Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay categorias registrados';
                    }
                }
            break;
        }
    }
    header('content-type: application/json; charset=utf-8');
    // Se imprime el resultado en formato JSON y se retorna al controlador.
    // print_r($result);
    print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}

?>