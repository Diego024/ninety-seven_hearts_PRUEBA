<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('FAQs');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('COMENTARIOS');
?>
<br>
<br>

<!-- INICIO DEL MODAL DE COMENTARIOS -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Agrege un cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="save-form" enctype="multipart/form-data">
                    <!-- Campo invicible del ID -->
                    <input class="d-none" type="number" id="id_comentario" name="id_comentario">
                    <!-- USUARIO Y PRODUCTO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cliente">Cliente</label>
                            <input type="text" class="form-control" id="cliente" name="cliente" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="catalogo_producto">Producto</label>
                            <input type="text" class="form-control" id="catalogo_producto" name="catalogo_producto" readonly>
                        </div>
                    </div>

                    <!-- VALORACIÓN Y ESTADO DEL COMENTARIO -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="valoracion">Valoración</label>
                            <input type="text" class="form-control" id="valoracion" name="valoracion" readonly>
                        </div>
                        
                        <div class="form-group col-md-6 search_select_box">
                            <label for="id_estado_comentario">Estado del comentario</label>
                            <select id="id_estado_comentario" name="id_estado_comentario" class="form-control">
                                <option value=1>Activo</option>
                                <option value=2>Bloqueado</option>
                            </select>
                        </div>
                    </div>

                    <!-- COMENTARIO Y FECHA DE PUBLICACION -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="comentario">Comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3" readonly></textarea>
                        </div>

                        <div class="col">
                            <label for="fecha_comentario">Fecha de publicación</label>
                            <input type="date" class="form-control" id="fecha_comentario" name="fecha_comentario" readonly>
                        </div>
                    </div>
                    <!-- Botones del form -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container" id="table-container">
    <div class="search-container">
        <div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" style="justify-content:flex-end;">
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
    Private_Page::footerTemplate('comentarios');
?>