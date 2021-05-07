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
<!-- INICIO DEL MODAL DE COMENTARIOS -->
<div class="modal fade" id="insertComentarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <label for="inputCity">Usuario</label>
                <input type="text" class="form-control" id="inputCity" readonly>
            </div>

            <div class="col">
                <label for="inputState">Fecha de publicación</label>
                <input type="date" class="form-control" id="inputAddress" readonly>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
            </div>

            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Estado del comentario</label>
                <select id="inputState" class="form-control" data-live-search="false" readonly>
                    <option selected>Deshabilitado</option>
                </select>
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
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Moys</td>
                <td>Me pareció buen producto y el horario de entrega bastante óptimo para acoplarse a mis horarios.</td>
                <td>Activo</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertComentarios">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Ninety-Seven_Hearts</td>
                <td>Muchas gracias por tu comentario, apreciamos tu valoración</td>
                <td>Activo</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertComentarios">
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