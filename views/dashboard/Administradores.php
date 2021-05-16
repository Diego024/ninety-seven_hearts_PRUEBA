<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Administradores');
?>

<!-- TITULO DE LA SECCIÓN -->
<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('ADMINISTRADORES');
?>
<br>

<!-- BOTÓN PARA EL MODAL DE CATÁLOGO -->
<div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" title="Agregar">
    <a onclick="openCreateDialog()">
        <span class="material-icons green">
        add
        </span>
    </a>
</div>

<!-- MODAL DEL FORM -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="save-form" enctype="multipart/form-data">
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
                                <option selected value=2>Femenino</option>
                                <option value=1>Masculino</option>
                            </select>
                        </div>
                    </div>
                    <!-- ESTADO Y FECHA DE NACIMIENTO -->
                    <div class="form-row"> 
                        <div class="form-group col-md-6 search_select_box">
                            <label for="inputState">Estado de la cuenta</label>
                            <select id="id_estado_cuenta" class="form-control" name="id_estado_cuenta">
                                <option selected value=1>Activa</option>
                                <option value=2>Inactiva</option>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container" id="table-container">
    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows">
    </table>
</div>
<?php
    Private_Page::footerTemplate('administradores');
?>