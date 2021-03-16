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
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>

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

        <br>
        <!-- BOTONES -->
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary" id="btn-Inventario">Deshabilitar comentario</button>
        </div>
    </form>
</div>
<br>
<div class="separador"></div>
<br>
<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Moys</td>
                <td>Me pareció buen producto y el horario de entrega bastante óptimo para acoplarse a mis horarios.</td>
                <td>Activo</td>

            </tr>
            <tr>
                <td>2</td>
                <td>Ninety-Seven_Hearts</td>
                <td>Muchas gracias por tu comentario, apreciamos tu valoración</td>
                <td>Activo</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Estado</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>