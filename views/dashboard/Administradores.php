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
                <h5 class="modal-title" id="modal-title">Agrege un administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="save-form">
                    <input class="d-none" type="number" id="id_administrador" name="id_administrador"/>
                    <!-- NOMBRES Y APELLIDO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">Nombres</label>
                        <input type="text" class="form-control" id="nombres">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCity">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos">
                        </div>
                    </div>
                    <!-- USUARIO Y EMAIL -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">Usuario</label>
                        <input type="text" class="form-control" id="usuario">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCity">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <!-- CLAVE Y CONFIRMACIÓN -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">Contraseña</label>
                        <input type="password" class="form-control" id="clave">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCity">Confirme la contraseña</label>
                            <input type="password" class="form-control" id="confirmar_clave">
                        </div>
                    </div>
                    <!-- TELEFONO Y GENERO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">Teléfono</label>
                        <input type="text" class="form-control" id="telefono">
                        </div>

                        <div class="form-group col-md-6 search_select_box">
                            <label for="inputState">Genero</label>
                            <select id="genero" class="form-control">
                                <option selected value=2>Femenino</option>
                                <option value=1>Masculino</option>
                            </select>
                        </div>
                    </div>
                    <!-- ESTADO Y FECHA DE NACIMIENTO -->
                    <div class="form-row"> 
                        <div class="form-group col-md-6 search_select_box">
                            <label for="inputState">Estado de la cuenta</label>
                            <select id="estado_cuenta" class="form-control">
                                <option selected>Activa</option>
                                <option>Inactiva</option>
                                <option>Bloqueada</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="inputState">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" placeholder="1234 Main St">
                        </div>
                    </div>
                    <!-- DIRECCION Y FOTO -->
                    <div class="form-row"> 
                        <div class="form-group col-md-6">
                            <label for="inputCity">Dirección</label>
                            <textarea class="form-control" id="direccion" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Foto</label>
                            <input type="file" class="form-control-file" id="foto_administrador">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows">
    </table>
</div>
<?php
    Private_Page::footerTemplate('administradores');
?>