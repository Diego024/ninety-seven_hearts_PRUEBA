<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninety-Seven Heart</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
    <link rel="stylesheet" href="../../resources/styles/css/public/Vestidos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
     <!--INICIO DEL HEADER Y NAV-->
     <header class="cabecera">
        <div class="logo">
            <a href="index.php"><img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt=""></a>
        </div>
        <div class="opciones">
            <div class="opciones--menu">
                <a href="SignIn.php"><img src="../../resources/statics/icons/usuarios.png" alt=""></a>
                <a href="Favoritos.php"><img src="../../resources/statics/icons/favoritos.png" alt=""></a>
                <img src="../../resources/statics/icons/carrito.png" alt="">
                <span class="menu--carrito__texto">
                    Carrito
                </span>
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

    <br>
    <!--JUMBOTRON-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" id="jumbo-Vestidos">
                    <div class="container">
                        <h1 class="display-4">Vestidos</h1>
                        <p class="lead">Lúcete en cualquier lugar con estos vestidos que te harán ver como el alma de la fiesta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><!--CARDS-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://ae01.alicdn.com/kf/Ha7724f03694a40d0bee63394cbfa9a43E/Venta-caliente-vestidos-de-ni-a-con-flores-para-boda-alto-bajo-para-ni-as-peque.jpg_q50.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido dorado</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41enOOnSGML.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido rojo</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="http://sc04.alicdn.com/kf/H372c1fe0640640b598311691cddcd744N.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido amarillo</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="http://sc01.alicdn.com/kf/HTB1nl1bao_rK1Rjy0Fcq6zEvVXa9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido rojo con flores</h5>
                        <p class="card-text">$35.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card" style="width: 20rem;">
                    <img src="http://sc01.alicdn.com/kf/Ha5f24c94321249ffbff9c26785399a4aW.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido azul con flores</h5>
                        <p class="card-text">$40.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center" style="width: 20rem;">
                    <img src="https://i.pinimg.com/originals/71/0b/c7/710bc7fcf808901207ed1f7077c23057.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vestido de girasoles</h5>
                        <p class="card-text">$36.99</p>
                        <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <!--PAGINATION-->
    <div class="container">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link text-danger" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link text-danger" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
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