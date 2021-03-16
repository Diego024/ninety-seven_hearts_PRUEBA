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
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>

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

        <br>
        <!-- BOTONES -->
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar cliente</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar cliente</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar cliente</button>
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
                <th>Pregunta</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>¿Cuánto cuesta el envío?</td>
            </tr>
            <tr>
                <td>2</td>
                <td>¿Se pueden hacer pasos en línea?</td>
            </tr>
            <tr>
                <td>4</td>
                <td>¿Qué hago si mi pedido no ha llegado?</td>
            <tr>
                <td>6</td>
                <td>¿Cuánto tiempo se puede tardar en llegar mi pedido?</td>
            </tr>
            <tr>
                <td>7</td>
                <td>¿Cuál es el método de entrega?</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Pregunta</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>