<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninety-Seven Heart</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
    <link rel="stylesheet" href="../../resources/styles/css/public/FAQ.css">
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
    <!--JUMBOTRON -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" id="jumbo">
                    <div class="container">
                        <h1 class="display-4">Preguntas Frecuentes</h1>
                        <p class="lead">Aquí podrás encontrar las respuestas a las preguntas que tienes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INICIO DEL ACORDEÓN-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b> ¿Cómo es el modo de entrega?</b>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>La entrega se realiza en centros comerciales según acuerdo previo con el cliente, habiendo especificado la fecha y hora,
                                así como el lugar de la entrega.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b> ¿Cuánto cuesta el envío?</b>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>El envío es completamente gratis para San Salvador y Santa Tecla, hacia otros departamentos, el precio de envío está sujeto a cambios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <b> ¿Cómo puedo consegui mi contenido?</b>
                                    </button>
                                </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Inicia sesión en League of Legends después de canjear la oferta y tu vale por un fragmento de aspecto 
                                aleatorio gratis estará en la página de botín ¡esperando que lo abras! Si has creado una nueva cuenta, 
                                no olvides completar primero el tutorial para recibir el contenido.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapsFour">
                                <b>¿Cuánto se tarda en llegar mi pedido?</b> 
                                </button>
                            </h2>
                        </div>

                        <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>El pedido tarda un aproximado de 3 días en llegar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <b>¿Hasta dónde se puede hacer el envío?</b> 
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Se hacen envíos a todo el país, el costo de envío está sujeto a cambios.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <b> ¿Qué hago si mi pedido no ha llegado?</b>
                                    </button>
                                </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Si por algún motivo tu pedido no ha llegado, puedes comunicarte con nosotros para darle un seguimiento al caso; también
                                recuerda revisar bien los datos que el vendedor te solicitó al momento de coordinar la entrega, ya que pueden existir
                                malos entendidos con respecto a la coordinación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <!-- FIN DEL ACRODEÓN-->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <h2>¿No encuentras tu pregunta? Contáctanos</h2>
            </div>
        </div>
    </div>
    <div class="separador"></div>
    <!--INICIO DEL FOOTER-->
    <footer class="pie">
        <div class="container">
          <div class="row">
            <div class="col">
            <br>
              <a href="#" class="text-dark"><p>Preguntas frecuentes</p></a>
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