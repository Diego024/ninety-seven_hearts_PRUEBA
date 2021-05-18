<?php
include('../../app/helpers/private_page.php');

Private_Page::sidebarTemplate('Clientes');
?>

<!-- TITULO DE LA SECCIÓN -->
<br>
<?php
include('../../app/helpers/public_page.php');
Public_Page::titleTemplate('CLIENTES');
?>
<br>

<!-- INICIO DEL MODAL DE CLIENTES Y FORM DE BÚSQUEDA-->
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
                    <input class="d-none" type="number" id="id_cliente" name="id_cliente" />
                    <!-- NOMBRES Y APELLIDO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                        </div>
                    </div>
                    <!-- TELEFONO Y EMAIL -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="correo_electronico">Email</label>
                            <input type="text" class="form-control" id="correo_electronico" name="correo_electronico">
                        </div>
                    </div>

                    <!-- FECHA DE NACIMIENTO Y GENERO-->
                    <div class="form-row">
                        <div class="col">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="1234 Main St">
                        </div>

                        <div class="form-group col-md-6 search_select_box">
                            <label for="id_genero">Género</label>
                            <select id="id_genero" name="id_genero" class="form-control">
                                <!--data-live-search="false"-->
                                <option selected value=2>Femenino</option>
                                <option value=1>Masculino</option>
                            </select>
                        </div>
                    </div>
                    <!-- DIRECCION Y ESTADO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="direccion">Dirección</label>
                            <textarea class="form-control" id="direccion" name="direccion" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6 search_select_box">
                            <label for="id_estado_cuenta">Estado de la cuenta</label>
                            <select id="id_estado_cuenta" name="id_estado_cuenta" class="form-control">
                                <option selected value=1>Activo</option>
                                <option value=2>Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <!-- CLAVE Y CONFIRMAR CLAVE -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="clave">Contraseña</label>
                            <input type="password" class="form-control" id="clave" name="clave">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirmar_clave">Confirme la contraseña</label>
                            <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave">
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
    <!-- BOTÓN PARA EL MODAL DE CLIENTES Y FORMULARIO DE BÚSQUEDA-->
    <div class="search-container">
        <div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" title="Agregar">
            <!-- BOTÓN PARA EL MODAL DE CATÁLOGO -->
            <a onclick="openCreateDialog()">
                <span class="material-icons green">
                    add
                </span>
            </a>
            <!-- FORM DEL SEARCH -->
            <form method="post" id="search-form" class="form-inline my-2 my-lg-0">
                <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows">
    </table>
</div>
<?php
Private_Page::footerTemplate('clientes');
?>