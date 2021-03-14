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
<?php
    Public_Page::footerTemplate();
?>