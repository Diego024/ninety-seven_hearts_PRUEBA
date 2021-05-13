<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('FAQs');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('CATEGORÍAS');
?>
<br>
<!-- BOTÓN PARA EL MODAL DE CATEGORIAS -->
<div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" title="Agregar">
    <a onclick="openCreateDialog()">
        <span class="material-icons green">
        add
        </span>
    </a>
</div>

<!-- INICIO DEL MODAL DE CATEGORIAS -->
<div class="modal fade" id="Form-categorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <!-- Campo invisible -->
            <input class="d-none" type="number" id="id_categoria" name="id_categoria">
            <!-- PREGUNTA Y RESPUESTA -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="categoria">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div>
                <div class="form-group col-md-6">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="foto">Imagen de la categoría</label>
                <input type="file" class="form-control-file" id="archivo_categoria" name="archivo_categoria">
              </div>
            </div>
            <!-- BOTONES DEL FORM -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container">
  <h4 id="warning-message" style="text-align:center"></h4>
  <table class="table table-striped table-bordered mydatatable" id="tbody-categorias">
  </table>
</div>

<?php
    Private_Page::footerTemplate("categorias");
?>