<?php

    // Clase para definir las plantillas de las páginas del public site
    class Private_Page {

        public static function sidebarTemplate($archivo) {

            // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en las páginas web.
            session_start();
            // Se imprime el HTML
            print('
                <!doctype html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <title>Dashboard</title>
                    <!-- Style -->
                    <link rel="stylesheet" href="../../resources/styles/css/dashboard/Index.css">
                    <link rel="stylesheet" href="../../resources/styles/css/dashboard/'.$archivo.'.css">
                    <link rel="stylesheet" href="../../resources/styles/css/dashboard/materialIcons.css">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
                    <!-- Bootstrap -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                    <!-- Material Icons -->
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
                </head>
                <body>
                ');

            // Se obtiene el nombre del archivo de la página web actual.
            $filename = basename($_SERVER['PHP_SELF']);
            // Se comprueba si existe una sesión de cliente para mostrar el menú de opciones, de lo contrario se muestra otro menú.
            if (isset($_SESSION['id_administrador'])) {
                // Se verifica si la página web actual es diferente a SignIn.php y SignUp.php, de lo contrario se direcciona a index.php
                if ($filename != 'Index.php' && $filename != 'register.php') {

                    if(isset($_SESSION['tiempo']))
                    {
                    //Tiempo en segundos para dar vida a la sesión.
                    $inactivo = 5;//5min en este caso. (Son segundos) 
                    //Calculamos tiempo de vida inactivo.
                    $vida_session = time() - $_SESSION['tiempo'];
                        
                        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
                        if($vida_session > $inactivo)
                        {
    
                            //Removemos sesión.
                            unset($_SESSION['id_administrador']); 
                            //Destruimos sesión.
                            
                            session_destroy();  
                            // Se redirecciona
                            header("Location: inactivo.html"); 
    
    
                            exit();
                        } else {  // si no ha caducado la sesion, actualizamos
                            $_SESSION['tiempo'] = time();
                        }
                    }
                    else
                    {
                    $_SESSION['tiempo'] = time();
                    }
                    print('
                    
                        <body>
                    
                        <div class="d-flex " id="wrapper">
                            <!-- Sidebar -->
                            <div class="bg-light border-right" id="sidebar-wrapper">
                                <div class="sidebar--img">
                                    <a href="Home.php">
                                        <img src="../../resources/imageFiles/dashboard/index/logo-ready.png" alt="" id="sidebar--img__logo">
                                    </a>
                                </div>
                                <div class="sidebar--separator">
                                    <div class="sidebar--separator__line"></div>
                                </div>
                                <div class="sidebar--info__container">
                                    <div class="sidebar--info__img">
                                        <img src="" alt="" id="info--img__user">
                                    </div>
                                    <div class="sidebar--info__data">
                                        <p class="sidebar--info__text">Bienvenido,</p>
                                        <p class="sidebar--info__name" id="admin--name">Diego Pacheco</p>
                                    </div>
                                </div>
                                <div class="sidebar--separator">
                                    <div class="sidebar--separator__line"></div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Cuenta
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="changePassword.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/change-password.png" alt=""> 
                                                        Cambiar clave
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="historial.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/historial.png" alt=""> 
                                                        Historial
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >
                                                        Mantenimientos
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="Administradores.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/administrators.png" alt=""> 
                                                        Administradores
                                                    </a>
                                                    <a href="Clientes.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/clientes.png" alt=""> 
                                                        Clientes
                                                    </a>
                                                    <a href="Categorias.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/categoria.png" alt=""> 
                                                        Categorías
                                                    </a>
                                                    <a href="Catalogo.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/productos.png" alt=""> 
                                                        Catalogo
                                                    </a>
                                                    <a href="Inventario.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/inventario.png" alt=""> 
                                                        Inventario
                                                    </a>
    
                                                    ' .
                                                    // <a href="" class="list-group-item list-group-item-action btn--boton__texto">
                                                    //     <img class="btn--boton__icon" src="../../resources/statics/icons/ofertas.png" alt=""> 
                                                    //     Ofertas
                                                    // </a>
                                                    '
    
                                                    <a href="FAQs.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/faqs.png" alt=""> 
                                                        FAQs
                                                    </a>
                                                    <a href="Comentarios.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/comentario.png" alt=""> 
                                                        Comentarios
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Datos
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="Pedidos.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/pedidos.png" alt=""> 
                                                        Ordenes de compra
                                                    </a>
                                                    <a href="HistorialVentas.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/historialPedidos.png" alt=""> 
                                                        Historial de ventas
                                                    </a>
                                                    <a href="Estadisticas.php" class="list-group-item list-group-item-action btn--boton__texto">
                                                        <img class="btn--boton__icon" src="../../resources/statics/icons/estadisticas.png" alt=""> 
                                                        Estadísticas
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a onclick="logOut()" id="logout--button" class="list-group-item list-group-item-action btn--boton__texto">
                                            <img class="btn--boton__icon" src="../../resources/statics/icons/logout.png" alt=""> 
                                            Cerrar Sesión
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /#sidebar-wrapper -->
                        
                            <!-- Page Content -->
                            <div id="page-content-wrapper">
                        
                                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                                    <button class="btn btn--boton__menu" id="menu-toggle">
                                        <img src="../../resources/statics/icons/menu.png" class="boton--menu__icon" alt="">
                                    </button>
                                </nav>
                ');
            } else {
                header('location: index.php');
            }
        } else {
            header('location: index.php');
        }
    }

        public static function footerTemplate($controller) {
            print('
                    </div>
                        <!-- /#page-content-wrapper -->
                    </div>

                    <!-- Bootstrap -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

                    <script src="../../app/features/dashboard/chart.js"></script>

                    <script>
                        $("#menu-toggle").click(function(e) {
                            e.preventDefault();
                            $("#wrapper").toggleClass("toggled");
                        });
                    </script>

                    <!-- LINKS DEL BUNDLE DE COMPONENTS -->
                    <script src="../../app/helpers/components.js"></script>
                    <script src="../../app/controllers/dashboard/'.$controller.'.js"></script>
                    <script src="../../app/controllers/dashboard/cuenta.js"></script>

                    <!-- LINKS DE SWEET ALERT -->
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                </body>
                </html>
            ');
        }
        
    }
