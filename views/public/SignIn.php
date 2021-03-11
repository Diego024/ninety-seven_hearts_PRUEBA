<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninety-Seven Heart</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
    <link rel="stylesheet" href="../../resources/styles/css/public/SignIn.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body id="cuerpo">

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

    <!--<nav class="menu sticky-top">
        <div class="menu--titulo">
            <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
        </div>
        <div class="menu--categorias menu--hidden" id="categories">
            <a href="#" class="categoria" id="btnVestidos">Vestidos</a>
            <a href="#" class="categoria" id="btnPantalones">Pantalones</a>
            <a href="#" class="categoria" id="btnTrajesBaño">Trajes de baño</a>
            <a href="#" class="categoria" id="btnHogar">Hogareña</a>
            <a href="#" class="categoria" id="btnCamisetas">Camisetas</a>
            <a href="#" class="categoria" id="btnAccesorios">Accesorios</a>
            <a href="#" class="categoria" id="btnLenceria">Lencería</a>
        </div>
    </nav>-->
    <br>
    <!--JUMBOTRON-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" id="jumbo-SignIn">
                    <div class="container">
                        <h1 class="display-4">Inicio de sesión</h1>
                        <p class="lead">Al iniciar sesión con nosotros obtendrás una mejor experiencia al momento de realizar tus compras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--INICIO DE FORM-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6"  id="frm_inicio">
            <form>
                <br>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Correo electrónico:</label>
                <div class="col">
                <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña:</label>
                <div class="col">
                <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-xs-5">
                ¿Aún no tienes una cuenta? <a href="SignUp.php">¡Regístrate ahora!</a>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-xs-5">
                <button type="submit" class="btn btn-danger" id="btn_card" href="Prueba.php">Iniciar sesión</button>
                </div>
            </div>
        </form>
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
              <p><img src="../../resources/statics/images/instagram_logo.png"> @ninety-sevenheart</p>
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