<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('FAQs');
?>

<!-- TTITULO DE LA SECCION -->
<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('PREGUNTAS FRECUENTES');
?>
<br>
  
  
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
              <input class="d-none" type="number" id="id_faq" name="id_faq">
              <!-- PREGUNTA Y RESPUESTA -->
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="pregunta">Pregunta</label>
                      <textarea class="form-control" id="pregunta" name="pregunta" rows="3"></textarea>
                  </div>
  
                  <div class="form-group col-md-6">
                      <label for="respuesta">Respuesta</label>
                      <textarea class="form-control" id="respuesta" name="respuesta" rows="3"></textarea>
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
  <div class="container" id="table-container">
    <div class="search-container">
      <div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" title="Agregar">
        <!-- BOTÓN PARA EL MODAL DE FAQs -->
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
    Private_Page::footerTemplate('faqs');
?>