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
                </div>
                <div class="col-sm-3" style="background: red;">

                </div>
            </div>
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
                </div>
                <div class="col-sm-3" style="background: red;">

                </div>
            </div>
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
                </div>
                <div class="col-sm-3" style="background: red;">

                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>