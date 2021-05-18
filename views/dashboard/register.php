<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer usuario</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../resources/styles/css/dashboard/Index.css">
    <link rel="stylesheet" href="../../resources/styles/css/dashboard/Administradores.css">
    <link rel="stylesheet" href="../../resources/styles/css/dashboard/materialIcons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
        
    <!-- TITULO DE LA SECCIÓN -->
    <br>
    <?php
        include('../../app/helpers/public_page.php');
        Public_Page::titleTemplate('PRIMER USUARIO');
    ?>
    <br>

    <div class="container" style="margin: 25px 100px 75px 100px; padding:0px;">
        <form method="post" id="save-form" enctype="multipart/form-data" style="position:relative;">
            <!-- Campo invicible del ID -->
            <input class="d-none" type="number" id="id_administrador" name="id_administrador"/>
            <!-- NOMBRES Y APELLIDO -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" id="nombres" name="nombres">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputCity">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
            </div>
            <!-- USUARIO Y EMAIL -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputCity">Email</label>
                    <input type="text" class="form-control" id="correo_electronico" name="correo_electronico">
                </div>
            </div>
            <!-- CLAVE Y CONFIRMACIÓN -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputCity">Confirme la contraseña</label>
                    <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave">
                </div>
            </div>
            <!-- TELEFONO Y GENERO -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>

                <div class="form-group col-md-6 search_select_box">
                    <label for="inputState">Genero</label>
                    <select id="id_genero" class="form-control" name="id_genero">
                        <option value=2>Femenino</option>
                        <option value=1>Masculino</option>
                    </select>
                </div>
            </div>
            <!-- ESTADO Y FECHA DE NACIMIENTO -->
            <div class="form-row"> 
                <div class="form-group col-md-6 search_select_box">
                    <label for="inputState">Estado de la cuenta</label>
                    <select id="id_estado_cuenta" class="form-control" name="id_estado_cuenta">
                        <option value=1>Activo</option>
                        <option value=2>Inactivo</option>
                        <option value=3>Bloqueado</option>
                        <!-- <option value=3>Bloqueada</option> -->
                    </select>
                </div>
                <div class="col">
                    <label for="inputState">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="1234 Main St">
                </div>
            </div>
            <!-- DIRECCION Y FOTO -->
            <div class="form-row"> 
                <div class="form-group col-md-6">
                    <label for="inputCity">Dirección</label>
                    <textarea class="form-control" id="direccion" name="direccion" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Foto</label>
                    <input type="file" id="foto_administrador" name="foto_administrador" class="form-control-file" accept=".gif, .jpg, .png">
                </div>
            </div>
            <div class="form-footer">
                <!-- <button type="button" class="btn btn-secondary" style="position:absolute; right:90px;" data-dismiss="modal" >Cancelar</button> -->
                <button type="submit" class="btn btn-primary" style="position:absolute; right:0px;">Guardar</button>
            </div>
        </form>
    </div>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <!-- LINKS DEL BUNDLE DE COMPONENTS -->
    <script src="../../app/helpers/components.js"></script>
    <script src="../../app/controllers/dashboard/register.js"></script>
    <script src="../../app/controllers/dashboard/cuenta.js"></script>

    <!-- LINKS DE SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>