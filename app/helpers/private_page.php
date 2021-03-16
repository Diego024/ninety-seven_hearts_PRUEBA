<?php

    // Clase para definir las plantillas de las páginas del public site
    class Private_Page {

        public static function sidebarTemplate($archivo) {
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
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
                    <!-- Bootstrap -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                </head>
                <body>
                    <body>
                
                    <div class="d-flex " id="wrapper">
                        <!-- Sidebar -->
                        <div class="bg-light border-right" id="sidebar-wrapper">
                            <div class="sidebar--img">
                                <a href="Index.php">
                                    <img src="../../resources/statics/images/logo-ready.png" alt="" id="sidebar--img__logo">
                                </a>
                            </div>
                            <div class="sidebar--separator">
                                <div class="sidebar--separator__line"></div>
                            </div>
                            <div class="sidebar--info__container">
                                <div class="sidebar--info__img">
                                    <img src="../../resources/statics/images/profile-cuadrado.jpg" alt="" id="info--img__user">
                                </div>
                                <div class="sidebar--info__data">
                                    <p class="sidebar--info__text">Bienvenido,</p>
                                    <p class="sidebar--info__name">Diego Pacheco</p>
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
                                                <button class="btn btn-link btn-block text-left btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                                                    Mantenimientos
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed btn--header__texto" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Datos
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
                                    <a href="#" id="logout--button" class="list-group-item list-group-item-action btn--boton__texto">
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
        }

        public static function footerTemplate() {
            print('
                        </div>
                        <!-- /#page-content-wrapper -->
                    </div>

                    <!-- Bootstrap -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

                    <script>
                        $("#menu-toggle").click(function(e) {
                            e.preventDefault();
                            $("#wrapper").toggleClass("toggled");
                        });
                    </script>

                    <!-- LINKS PARA LA LIBRERÍA DE LA TABLA -->
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.2/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.2/datatables.min.js"></script>
                    <script>
                        $(".mydatatable").DataTable();
                    </script>
            
                    <!-- PARA EL LIVE SEARCH -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
                    <script>
                        $(function () {
                            $("select").selectpicker();
                        });
                    </script>

                </body>
                </html>
            ');
        }
        
    }

?>
