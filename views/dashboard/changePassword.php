<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('index');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('CAMBIAR CONTRASEÑA');
?>


<div class="row my-4 py-4 d-flex flex-sm-column-reverse flex-md-row justify-content-center align-items-start align-items-md-center">
    <div class="col-md-12 col-lg-6">
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
    <div class="col-md-12 col-lg-4 d-flex justify-content-start align-items-start flex-column">
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

<?php
    Private_Page::footerTemplate('changePassword');
?>