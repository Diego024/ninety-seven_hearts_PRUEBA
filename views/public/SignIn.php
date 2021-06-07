<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Inicio de sesión', 'SignIn');
?>


<div class="separador"></div>
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
        <div class="col-sm-6" id="frm_inicio">
            <form method="post" id="session-form">
                <br>
                <div class="form-group row">
                    <label for="usuario" class="col-sm-2 col-form-label">Correo electrónico:</label>
                    <div class="col">
                        <input type="email" class="form-control" id="usuario" name="usuario">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col">
                        <input type="password" class="form-control" id="clave" name="clave">
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
<?php
Public_Page::footerTemplate('login');
?>