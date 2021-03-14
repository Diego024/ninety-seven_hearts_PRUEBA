<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Camisa Vogue</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../resources/styles/css/public/Producto.css">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        
         <!--INICIO DEL HEADER Y NAV-->
        <header class="cabecera">
            <div class="logo">
                <a href="#"><img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt=""></a>
            </div>
            <div class="opciones">
                <div class="opciones--menu">
                    <span class="menu--carrito__texto">
                        Carrito
                    </span>
                    <a href="Favoritos.php"><img src="../../resources/statics/icons/carrito.png" alt=""></a>
                    <a href="SignUp.php"><img src="../../resources/statics/icons/favoritos.png" alt=""></a>
                    
                    <div class="usuario--contenedor">
                        <img src="../../resources/statics/icons/usuarios.png" id="icono--usuario" alt="">
                        <div class="usuario--opciones">
                            <a href="" class="usuario--contenedor__enlace">Cuenta</a>
                            <a href="" class="usuario--contenedor__enlace">Cerrar Sesión</a>
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
        <!--FIN DEL HEADER Y NAV-->

        <div class="separador"></div>

        <!-- MENU -->
        <nav class="menu sticky-top">
            <div class="menu--titulo">
                <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
            </div>
            <div class="menu--categorias menu--hidden" id="categories">
                <a href="Vestidos.php" class="categoria" id="btnVestidos">Vestidos</a>
                <a href="Pantalones.php" class="categoria" id="btnPantalones">Pantalones</a>
                <a href="Trajes_baño.php" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
                <a href="Hogareña.php" class="categoria" id="btnHogar">Hogareña</a>
                <a href="Camisetas.php" class="categoria" id="btnCamisetas">Camisetas</a>
                <a href="Accesorios.php" class="categoria" id="btnAccesorios">Accesorios</a>
                <a href="Lenceria.php" class="categoria" id="btnLenceria">Lencería</a>
            </div>
        </nav>

        <div class="container producto--contenedor">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://i.pinimg.com/originals/05/b4/12/05b412352c9377a2fcf28f86a7038fac.jpg" class="img-fluid" id="producto--img" alt="...">
                </div>
                <div class="col-lg-8">
                    <h3 class="producto--info__titulo">
                        Camisa Vogue
                    </h3>
                    <h3 class="producto--info__precio">
                        $49.99
                    </h3>
                    
                    <div>
                        <label for="inputState">Talla: </label>
                        <select id="inputState" class="form-control-sm">
                            <option selected>Seleccione una talla</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                        </select>
                    </div>

                    <div>
                        <label for="inputState">Cantidad: </label>
                        <select id="inputState" class="form-control-sm">
                            <option selected>Seleccione una cantidad</option>
                            <option value="1">1</option>  
                            <option value="2">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">7</option>
                        </select>
                    </div>

                    <div>
                        <button type="button" class="bbtn btn-dark" id="agregarCarrito--boton" data-toggle="modal" data-target="#confirmarPedido">
                            Agregar al carrito
                        </button>
                    </div>
                    
                    <h3 class="producto--info__descripcion" style="margin-top: 25px;">
                        Descripción:
                    </h3>
                    
                    <p>El nuevo capítulo de Ann Demeulemeester sin Ann Demeulemeester no podría ser más fiel a la diseñadora belga</p>

                    <div class="agregarComentario--contenedor">
                        <a href="" class="agregarComentario--enlace">
                            Agregar comentario
                        </a>
                    </div>
                    
                </div>
                <div class="col comentarios--contenedor">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nuevo comentario:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="button" class="bbtn btn-dark" id="comentario--boton" data-toggle="modal" data-target="#confirmarPedido">
                            Guardar comentario
                        </button>
                    </div>
                    <div class="media">
                        <img src="../../resources/statics/icons/usuarios.png" class="mr-3 comentario--img" alt="...">
                        <div class="media-body">
                          <h5 class="mt-0">Diego Moys</h5>
                          <p>Me pareció buen producto y el horario de entrega bastante óptimo para acoplarse a mis horarios.</p>
                      
                          <div class="media mt-3">
                            <a class="mr-3" href="#">
                              <img src="../../resources/statics/icons/usuarios.png" alt="..." class="comentario--img">
                            </a>
                            <div class="media-body">
                              <h5 class="mt-0">Ninety-Seven Hearts</h5>
                              <p>Muchas gracias por tu comentario, apreciamos tu valoración</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <!--INICIO DEL FOOTER-->
        <footer class="pie">
            <div class="container">
            <div class="row">
                <div class="col">
                <br>
                <a href="FAQ.php" class="text-dark"><p>Preguntas frecuentes</p></a>
                </div> 
                <div class="col">
                <br>
                <p><a href="https://www.instagram.com/ninety_sevenheart/" class="text-dark"><img src="../../resources/statics/images/instagram_logo.png"> @ninety-sevenheart</p></a>
                </div>
                <div class="col">
                <br>
                <p><img src="../../resources/statics/images/facebook.png"> Ninety-Seven Heart</p>
                </div>
                <div class="col">
                <br>
                <p><img src="../../resources/statics/images/whatsapp.png">2222-2222</p>
                </div>
            </div>   
            <div class="row justify-content-center">
                    <p>Derechos reservados - Ninety-Seven Heart 2021</p>
            </div>        
            </div>
        </footer>

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>