<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninety-Seven Heart</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
    <!-- Bootstrap -->
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

    <div class="separador"></div>

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
    
    <!--FIN DEL HEADER Y NAV-->
    <!--INICIO CARRUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../resources/statics/images/pato.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../resources/statics/images/pato.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../resources/statics/images/pato.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <!-- TITULO DE LA SECION -->
    <div class="seccion--titulo">
        <h4 class="seccion--titulo__texto">OFERTAS ESPECIALES</h3>
    </div>
    <!-- OFERTAS -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="../../resources/statics/images/blusa_negra.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blusa negra</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="../../resources/statics/images/blusa_blanca.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blusa blanca</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="../../resources/statics/images/blusa_dorada.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blusa dorada</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <a href="#" class="btn btn-secondary" id="btn_ver">Ver más...</a>
            </div>
        </div>
    </div>
    <br>
    <!-- TITULO DE LA SECION -->
    <div class="seccion--titulo">
        <h4 class="seccion--titulo__texto">NOVEDADES</h3>
    </div>
    <!-- NOVEDADES -->
    <br>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="../../resources/statics/images/regalo.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                    <div class="card-body">
                        <h5 class="card-title">Regalo bonito (opción 1)</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="../../resources/statics/images/regalo2.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                    <div class="card-body">
                        <h5 class="card-title">Regalo bonito (opción 2)</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="../../resources/statics/images/regalo3.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                    <div class="card-body">
                        <h5 class="card-title">Regalo bonito (opción 3)</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <a href="#" class="btn btn-secondary" id="btn_ver">Ver más...</a>
            </div>
        </div>
    </div>
    <br>
    <div class="separador"></div>
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
    <!-- App -->
    <script type="module" src="../../app/features/public/index.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>