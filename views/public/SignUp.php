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
            </div>
            <div class="form-row"> <!--PARA FECHA DE NACIMIENTO Y GÉNERO--> 
                <div class="col">
                    <label for="inputState">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
<?php
    Public_Page::footerTemplate();
?>