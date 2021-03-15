
<?php

    // Clase para definir las plantillas de las páginas del public site
    class Public_Page {

        //HEADER
        public static function headerTemplate($title, $file) {
            print('
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>'.$title.'</title>
                    <!-- Style -->
                    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
                    <link rel="stylesheet" href="../../resources/styles/css/public/'.$file.'.css">
                    <!-- Bootstrap -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                </head>
                <body>

                    <!--INICIO DEL HEADER Y NAV-->
                    <header class="cabecera">
                        <div class="logo">
                            <a href="index.php"><img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt=""></a>
                        </div>
                        <div class="opciones">
                            <div class="opciones--menu">
                                <span class="menu--carrito__texto">
                                    Carrito
                                </span>
                                <a href="Carrito.php"><img src="../../resources/statics/icons/carrito.png" alt=""></a>
                                <a href="Favoritos.php"><img src="../../resources/statics/icons/favoritos.png" alt=""></a>
                                
                                <div class="usuario--contenedor">
                                    <img src="../../resources/statics/icons/usuarios.png" id="icono--usuario" alt="">
                                    <div class="usuario--opciones">
                                        <a href="SignUp.php" class="usuario--contenedor__enlace">Cuenta</a>
                                        <a href="SignIn.php" class="usuario--contenedor__enlace">Cerrar Sesión</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="opciones--buscar">
                                <form action="" class="buscar">
                                    <input type="search" class="buscar--input" placeholder="Buscar" size="45" spellcheck="true">
                                    <button class="buscar--button">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </header>
            ');
        }

        //NAVBAR
        public static function navbarTemplate($page) {
            switch($page) {
                case 'Vestidos':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria categoria__selected" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'Pantalones':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria categoria__selected" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'TrajesBaño':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria categoria__selected" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'Hogar':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria categoria__selected" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'Camisetas':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria categoria__selected" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'Accesorios':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria categoria__selected" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
                case 'Lenceria':
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria categoria__selected" id="btnLenceria">Lencería</a>';
                break;
                default:
                    $opciones = '
                    <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                    <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                    <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                    <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                    <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                    <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                    <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>';
                break;
            }

            print('
                <nav class="menu sticky-top">
                    <div class="menu--titulo">
                        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
                    </div>
                    <div class="menu--categorias menu--hidden" id="categories">
                        '.$opciones.'
                    </div>
                </nav>
                <!--FIN DEL HEADER Y NAV-->
            ');
        }

        //TITULO
        public static function titleTemplate($title) {
            print('
            <div class="seccion--titulo">
                <h4 class="seccion--titulo__texto">'.$title.'</h3>
            </div>
            ');
        }

        //FOOTER
        public static function footerTemplate() {
            print('
                <!--INICIO DEL FOOTER-->
                <footer class="pie">
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-2">
                        <br>
                        <a href="FAQ.php" class="text-dark"><p>Preguntas frecuentes</p></a>
                        </div> 
                        <div class="col-sm-12 col-lg-2">
                        <br>
                        <a href="SobreNosotros.php" class="text-dark"><p>Sobre Nosotros</p></a>
                        </div> 
                        <div class="col-sm-12 col-lg-3">
                        <br>
                        <p><a href="https://www.instagram.com/ninety_sevenheart/" class="text-dark"><img src="../../resources/statics/images/instagram_logo.png"> @ninety-sevenheart</p></a>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                        <br>
                        <p><img src="../../resources/statics/images/facebook.png"> Ninety-Seven Heart</p>
                        </div>
                        <div class="col-sm-12 col-lg-2">
                        <br>
                        <p><img src="../../resources/statics/images/whatsapp.png">2222-2222</p>
                        </div>
                    </div>   
                    <div class="row justify-content-center">
                            <p>Derechos reservados - Ninety-Seven Heart 2021</p>
                    </div>        
                    </div>
                </footer>
                <!-- App -->
                <script type="module" src="../../app/features/public/index.js"></script>
                <!-- Bootstrap -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            </body>
            </html>
            ');
        }

    }

?>
