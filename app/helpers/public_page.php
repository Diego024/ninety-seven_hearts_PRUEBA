
<?php

// Clase para definir las plantillas de las páginas del public site
class Public_Page
{

    //HEADER
    public static function headerTemplate($title, $file)
    {

        // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en las páginas web.
        session_start();
        // Se imprime el HTML
        print('
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>' . $title . '</title>
                    <!-- Style -->
                    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
                    <link rel="stylesheet" href="../../resources/styles/css/public/' . $file . '.css">
                    <!-- Bootstrap -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                </head>
                <body>
            ');

        // Se obtiene el nombre del archivo de la página web actual.
        $filename = basename($_SERVER['PHP_SELF']);
        // Se comprueba si existe una sesión de cliente para mostrar el menú de opciones, de lo contrario se muestra otro menú.
        if (isset($_SESSION['id_cliente'])) {
            // Se verifica si la página web actual es diferente a login.php y register.php, de lo contrario se direcciona a index.php
            if ($filename != 'SignIn.php' && $filename != 'SignUp.php') {
                print('
                    <!--INICIO DEL HEADER Y NAV-->
                    <header class="cabecera">
                        <div class="logo">
                            <a href="index.php"><img src="../../resources/imageFiles/public/logo-ready.png" alt=""></a>
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
                                        <a href="#" onclick="logOut()" class="usuario--contenedor__enlace">Cerrar Sesión</a>
                                        <a href="Historial.php" class="usuario--contenedor__enlace">Historial de compra</a>
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
            } else {
                header('location: index.php');
            }
        } else {
            // Se verifica si la página web actual es diferente a index.php (Iniciar sesión) y a register.php (Crear primer usuario) para direccionar a index.php, de lo contrario se muestra un menú vacío.
            if ($filename != 'Carrito.php') {
                print('
                    <!--INICIO DEL HEADER Y NAV-->
                    <header class="cabecera">
                        <div class="logo">
                            <a href="index.php"><img src="../../resources/imageFiles/public/logo-ready.png" alt=""></a>
                        </div>
                        <div class="opciones">
                            <div class="opciones--menu">
                            <span class="menu--carrito__texto">
                                Carrito
                            </span>
                            
                            <a href="SignIn.php"><img src="../../resources/statics/icons/carrito.png" alt=""></a>
                            <a href="SignIn.php"><img src="../../resources/statics/icons/favoritos.png" alt=""></a>

                                <div class="usuario--contenedor">
                                    <img src="../../resources/statics/icons/usuarios.png" id="icono--usuario" alt="">
                                    <div class="usuario--opciones">
                                        <a href="SignUp.php" class="usuario--contenedor__enlace">Crear cuenta</a>
                                        <a href="SignIn.php" class="usuario--contenedor__enlace">Iniciar sesión</a>
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
            } else {
                header('location: SignIn.php');
            }
        }
    }

        //TITULO
        public static function titleTemplate($title) {
            print('
            <div class="seccion--titulo">
                <h4 class="seccion--titulo__texto">' . $title . '</h3>
            </div>
            ');
    }

        //FOOTER
        public static function footerTemplate($controller) {
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
                        <p><a href="https://www.instagram.com/ninety_sevenheart/" class="text-dark"><img src="../../resources/imageFiles/public/instagram_logo.png"> @ninety-sevenheart</p></a>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                        <br>
                        <p><img src="../../resources/imageFiles/public/facebook.png"> Ninety-Seven Heart</p>
                        </div>
                        <div class="col-sm-12 col-lg-2">
                        <br>
                        <p><img src="../../resources/imageFiles/public/whatsapp.png">2222-2222</p>
                        </div>
                    </div>   
                    <div class="row justify-content-center">
                            <p>Derechos reservados - Ninety-Seven Heart 2021</p>
                    </div>        
                    </div>
                </footer>
                <!-- Controller -->
                <script src="../../app/controllers/public/'.$controller.'.js"></script>
                <script src="../../app/helpers/components.js"></script>
                <script type="module" src="../../app/features/public/index.js"></script>
                <script src="../../app/controllers/public/account.js"></script>
                <!-- Bootstrap -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                <!-- LINKS DE SWEET ALERT -->
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            </body>
            </html>
            ');
    }
}

?>
