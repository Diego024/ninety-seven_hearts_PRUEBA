<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../resources/styles/css/public/Carrito.css">
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
        
        <!-- TITULO -->
        <div class="seccion--titulo">
            <h4 class="seccion--titulo__texto">MIS ARTÍCULOS</h3>
        </div>

        <!-- PRODUCTO DEL CARRITO -->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="carta--contenedor__titulo">
                                        <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                        <p>$49.99</p>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        
                                        <label for="inputState">Talla: </label>
                                        <select id="inputState" class="form-control-sm">
                                            <option selected>Seleccione una talla</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
            
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

                                        <div class="carrito--enlace__contenedor">
                                            <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="carta--contenedor__titulo">
                                        <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                        <p>$49.99</p>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        
                                        <label for="inputState">Talla: </label>
                                        <select id="inputState" class="form-control-sm">
                                            <option selected>Seleccione una talla</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
            
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

                                        <div class="carrito--enlace__contenedor">
                                            <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="carta--contenedor__titulo">
                                        <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                        <p>$49.99</p>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        
                                        <label for="inputState">Talla: </label>
                                        <select id="inputState" class="form-control-sm">
                                            <option selected>Seleccione una talla</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
            
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

                                        <div class="carrito--enlace__contenedor">
                                            <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12" id="finalizarPedido--contenedor" style="background: #FBD1CF;">
                            <h4 class="finalizarPedido--texto">Subtotal (3 Productos):</h4>
                            <h4 class="finalizarPedido--texto">$185.99</h4>

                            <div class="form-check form-check-inline finalizarPedido--opcionRegalo">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Este pedido es un regalo</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="bbtn btn-dark" id="finalizarPedido--boton" data-toggle="modal" data-target="#confirmarPedido">
                                        Realizar pedido
                                    </button>
                                </div>
                            </div>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="confirmarPedido" tabindex="-1" aria-labelledby="confirmarPedidoLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="confirmarPedidoLabel">¿Seguro que quiere confirmar su pedidio?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Al confirmar el pedido nos contactaremos con usted para acordar la entrega.
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-dark" id="modal--btn">Confirmar</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12" id="recomendaciones--contenedor">
                            <h4 class="recomendaciones--texto">
                                Más productos que te pueden gustar
                            </h4>

                            <div class="recomendaciones--contenedor__img">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/614FBjWz0HL._AC_UY500_.jpg" class="img-fluid recomendaciones--img " alt="...">
                                <a class="recomendaciones--producto__titulo">Pulseras "Infinito"</a>
                                <p class="recomendaciones--producto__precio">$49.99</p>
                            </div>

                            <div class="recomendaciones--contenedor__img">
                                <img src="https://image.dhgate.com/0x0p/f2/albu/g6/M01/C6/F3/rBVaR1sfTECAfRVuAAHk0fezHv8875.jpg" class="img-fluid recomendaciones--img " alt="...">
                                <a class="recomendaciones--producto__titulo">Collar de perlas</a>
                                <p class="recomendaciones--producto__precio">$49.99</p>
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