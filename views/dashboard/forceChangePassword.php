<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>
        <!-- Style -->
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/Index.css">
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/index.css">
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/materialIcons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    </head>
    <body>
    <br>

    <?php
        include('../../app/helpers/public_page.php');
        Public_Page::titleTemplate('CAMBIAR CONTRASEÑA');
    ?>

    <section class="container">
        <div class="row my-4 py-4 d-flex flex-sm-column-reverse flex-md-row justify-content-center align-items-start align-items-md-center">
            <div class="col-md-12 col-lg-6 px-0">
                <form method="post" id="save-form" enctype="multipart/form-data">
                    <!-- PRODUCTO Y DESCRIPCIÓN -->
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="clave_actual">Contraseña actual:</label>
                            <input type="password" class="form-control" id="clave_actual" name="clave_actual" autocomplete="off" maxlength="75">
                        </div>
    
                        <div class="form-group col-md-9 mt-2">
                            <label for="nueva_clave">Nueva contraseña:</label>
                            <input type="password" class="form-control" id="nueva_clave" name="nueva_clave" autocomplete="off" maxlength="75">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="confirmacion">Confirme su contraseña:</label>
                            <input type="password" class="form-control" id="confirmacion" name="confirmacion" autocomplete="off" maxlength="75">
                        </div>
    
                        <div class="col-md-9 my-2">
                            <button type="submit" class="btn btn-outline-success w-100">Cambiar contraseña</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-lg-4 d-flex justify-content-start align-items-start flex-column px-0">
                <h5>La contraseña tiene que tener</h3>
                <div class="font-weight-light">
                    <p>
                        Al menos una letra en mayúscula (A-Z) <br>
                        Al menos 1 carácter especial (@, /, -) <br>
                        Al menos 1 número (0-9) <br>
                        Al menos 8 carácteres <br>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php
    include('../../app/helpers/private_page.php');

    Private_Page::footerTemplate('forceChangePassword');
?>