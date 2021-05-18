<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Pedidos');
?>
<!-- TITULO DE LA SECCIÓN -->
<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('PEDIDOS');
?>
<br>
<!-- FORMULARIO DE BÚSQUEDA-->
<div class="container">
    <div>
        <form method="post" id="search-form" class="form-inline my-2 my-lg-0">
            <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>

<!-- INICIO DEL MODAL DE PEDIDOS-->
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
                    <input class="d-none" type="number" id="id_orden_compra" name="id_orden_compra" />
                    <!-- ESTADO -->
                    <div class="form-row">
                        <div class="form-group col-md-6 search_select_box">
                            <label for="id_estado_orden">Estado de la orden</label>
                            <select id="id_estado_orden" name="id_estado_orden" class="form-control">
                                <option selected value=1>Finalizada</option>
                                <option value=2>Entregando</option>
                                <option value=3>Pendiente</option>
                                <option value=4>Anuladas</option>
                                <option value=5>En proceso</option>
                            </select>
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
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows-pedidos">
    </table>
</div>
<br>
<?php
    Private_Page::footerTemplate('pedidos');
?>