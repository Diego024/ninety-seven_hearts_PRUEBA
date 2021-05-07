<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('FAQs');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('PREGUNTAS FRECUENTES');
?>
<br>
<!-- BOTÓN PARA EL MODAL DE FAQs -->
<div class="add--icon__container">
    <a href="" data-toggle="modal" data-target="#insertFAQ">
        <span class="material-icons green">
        add
        </span>
    </a>
</div>

<!-- INICIO DEL MODAL DE CLIENTES -->
<div class="modal fade" id="insertFAQ" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrege un cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- PREGUNTA Y RESPUESTA -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Pregunta</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Respuesta</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Pregunta</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>¿Cuánto cuesta el envío?</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertFAQ">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>¿Se pueden hacer pasos en línea?</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertFAQ">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>¿Qué hago si mi pedido no ha llegado?</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertFAQ">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            <tr>
                <td>6</td>
                <td>¿Cuánto tiempo se puede tardar en llegar mi pedido?</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertFAQ">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>¿Cuál es el método de entrega?</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertFAQ">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>