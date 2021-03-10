<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninety-Seven Heart</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/public/index.css">
    <link rel="stylesheet" href="../../resources/styles/css/public/SignUp.css">
    <link rel="stylesheet" href="../../resources/styles/css/public/SignIn.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body id="cuerpo2">

     <!--INICIO DEL HEADER Y NAV-->
    <header class="cabecera">
        <div class="logo">
        <a href="index.php"><img src="https://www.howdeniberia.com/wp-content/uploads/2018/05/Disney-logo-png-transparent-download.png" alt=""></a>
        </div>
        <div class="opciones">
            <div class="opciones--menu">
                <a href="SignIn.php"><img src="../../resources/statics/icons/usuarios.png" alt=""></a>
                <img src="../../resources/statics/icons/favoritos.png" alt="">
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
    <br>
    <!--JUMBOTRON-->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" id="jumbo-SignIn">
                    <div class="container">
                        <h1 class="display-4">Registrarse</h1>
                        <p class="lead">Crear una cuenta es muy fácil, solo tienes que llenar los datos que se te piden a continuación.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--INICIO DEL FORM-->
    <div class="container">
            <form id="formulario">
                <div class="form-row"> <!--PARA NOMBRES Y APELLIDOS-->
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombres</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Diego Fernando">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Apellidos</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Moys Romero">
                    </div>
                    <!--<div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>-->
                </div>
                <p>Fecha de nacimiento</p>
                <div class="form-row"> <!--PARA FECHA DE NACIMIENTO Y GÉNERO--> 
                    <div class="col-sm-2"> <!--SELECT PARA LOS DÍAS-->
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Día</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                            <option value="6">7</option>
                        </select>
                    </div>
                    <div class="col-sm-2"> <!--SELECT PARA LOS MESES-->
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Mes</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Enero</option>
                            <option value="1">Febrero</option>
                            <option value="2">Marzo</option>
                            <option value="3">Abril</option>
                            <option value="4">Mayo</option>
                            <option value="5">Junio</option>
                            <option value="6">Julio</option>
                        </select>
                    </div>
                    <div class="col-sm-2"> <!--SELECT PARA LOS AÑOS-->
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Año</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>2021</option>
                            <option value="1">2020</option>
                            <option value="2">2019</option>
                            <option value="3">2018</option>
                            <option value="4">2017</option>
                            <option value="5">2016</option>
                            <option value="6">2015</option>
                        </select>
                    </div>                   
                    <div class="col-sm-6 text-align-center"> <!--RADIO BUTTONS-->
                        <p>Género</p>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row"><!--PARA TELÉFONO Y CORREO ELECTRÓNICO-->
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Teléfono</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="2222-2222">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Correo electrónico</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="jhondoe@example.com">
                    </div>
                </div>
                <div class="form-group"><!--PARA LA DIRECCIÓN-->
                    <label for="inputAddress2">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Ej. Recidendial Villas de San Patricio, San Salvador, San Salvador">
                </div>
                <div class="form-row"> <!--PARA LAS CONTRASEÑAS-->
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                    <button type="submit" class="btn btn-danger" id="btn_card">REGISTRARSE</button>
                    </div>
                </div>
            </form>
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
            <p><a href="https://www.instagram.com/ninety_sevenheart/"  class="text-dark"><img src="../../resources/statics/images/instagram_logo.png"> @ninety-sevenheart</p></a>
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