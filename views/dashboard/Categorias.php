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
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>

        <!-- PREGUNTA Y RESPUESTA -->
        <div class="form-row">
        <div class="form-group col-md-12">
                <label for="inputCity">Categoría</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
        </div>

        <br>
        <!-- BOTONES -->
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar categoría</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar categoría</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar categoría</button>
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
                <th>Categoría</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Camisas</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pantalones</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Accesorios</td>
            <tr>
                <td>6</td>
                <td>Accesorios</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Vestidos</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Categoría</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>