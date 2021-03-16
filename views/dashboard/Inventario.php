<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Inventario');
?>

<!-- TITULO DE LA SECCIÓN -->
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('INVENTARIO');
?>
<br>
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>
        <!-- PRODUCTO Y FECHA DE INGRESO -->
        <div class="form-row"> 
            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Producto</label>
                <select id="inputState" class="form-control" data-live-search="true">
                    <option selected>Camiseta estampada negra</option>
                    <option>Vestido Azul con flores</option>
                    <option>Vestido Rojo con flores</option>
                    <option>Pantalón negro</option>
                </select>
            </div>
            <div class="col">
                <label for="inputState">Fecha de ingreso</label>
                <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
        </div>
        <!-- CANTIDAD Y PRECIO -->
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Cantidad</label>
            <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Precio adquirido($)</label>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
        </div>
        <!-- BOTONES -->
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar entrada</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar entrada</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar entrada</button>
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
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha de ingreso</th>
                <th>Precio adquirido</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Pantalón negro</td>
                <td>100</td>
                <td>15/03/2021</td>
                <td>$100.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pantalón negro</td>
                <td>100</td>
                <td>02/03/2021</td>
                <td>$110.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Camiseta negra estampada</td>
                <td>50</td>
                <td>01/02/2021</td>
                <td>$40.00</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Vestido rojo de flores</td>
                <td>15</td>
                <td>15/03/2021</td>
                <td>$30.50</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pijama de unicornio</td>
                <td>50</td>
                <td>01/01/2021</td>
                <td>$120.00</td>
            </tr>
                <tr>
                <td>6</td>
                <td>Pijama de unicornio</td>
                <td>10</td>
                <td>02/02/2021</td>
                <td>$110.99</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Juegos de lencería</td>
                <td>25</td>
                <td>05/01/2021</td>
                <td>$63.55</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha de ingreso</th>
                <th>Precio adquirido</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>