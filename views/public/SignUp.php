<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Registrarse', 'SignUp');
?>

<div class="separador"></div>
<br>
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-SignUp">
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
    <form method="post" id="register-form">
    <!-- Campo oculto para asignar el token del reCAPTCHA -->
    <input class="d-none" type="text" id="g-recaptcha-response" name="g-recaptcha-response"/>
        <div class="form-row">
            <!--PARA NOMBRES Y APELLIDOS-->
            <div class="form-group col-md-6">
                <label for="nombres">Nombres</label>
                <input autocomplete="off" type="text" class="form-control" id="nombres" name="nombres" placeholder="Diego Fernando" required>
            </div>
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos</label>
                <input autocomplete="off" type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Moys Romero" required>
            </div>
        </div>
        <div class="form-row">
            <!--PARA FECHA DE NACIMIENTO Y GÉNERO-->
            <div class="col">
                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="1234 Main St" required>
            </div>
            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Genero</label>
                <select id="id_genero" class="form-control" name="id_genero" required>
                    <option value=2>Femenino</option>
                    <option value=1>Masculino</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-row">
            <!--PARA TELÉFONO Y CORREO ELECTRÓNICO-->
            <div class="form-group col-md-6">
                <label for="telefono">Teléfono</label>
                <input autocomplete="off" type="text" class="form-control" id="telefono" name="telefono" placeholder="2222-2222" required>
            </div>
            <div class="form-group col-md-6">
                <label for="correo_electronico">Correo electrónico</label>
                <input autocomplete="off" type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="jhondoe@example.com" required>
            </div>
        </div>
        <div class="form-group">
            <!--PARA LA DIRECCIÓN-->
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ej. Recidendial Villas de San Patricio, San Salvador, San Salvador" required>
        </div>
        <div class="form-row">
            <!--PARA LAS CONTRASEÑAS-->
            <div class="form-group col-md-6">
                <label for="inputPassword4">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave" required> 
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

<!-- Importación del archivo para que funcione el reCAPTCHA. Para más información https://developers.google.com/recaptcha/docs/v3 -->
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LeP7lMcAAAAAAk4GZ3YLOROkL8JIZf0BCWWbVcj"></script>

<?php
Public_Page::footerTemplate('signin');
?>