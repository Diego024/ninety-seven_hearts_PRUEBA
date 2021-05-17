<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Index');
?>
<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('NUEVOS PEDIDOS');
?>
<br>

<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Orden</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Detalles</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Diego Moys</td>
                <td>15/03/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Diego Pacheco</td>
                <td>25/02/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Fernando Alvarenga</td>
                <td>01/02/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Elmer Argueta</td>
                <td>15/03/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Diego Estrada</td>
                <td>01/01/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Elmer Argueta</td>
                <td>18/03/2021</td>
                <td>Ver detalle...</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Diego Estrada</td>
                <td>05/01/2021</td>
                <td>Ver detalle...</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Orden</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Detalles</th>
            </tr>
        </tfoot>
    </table>
</div>


<br>
<?php
    Public_Page::titleTemplate('PRODUCTOS CON POCAS EXISTENCIAS');
?>
<br>

<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Existencia</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Top con flores</td>
                <td>Blusas</td>
                <td>7</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Vestido de noche</td>
                <td>Vestidos</td>
                <td>14</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bracelete dorado</td>
                <td>Accesorios</td>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Aretes de mariposa</td>
                <td>Accesorios</td>
                <td>10</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Jeans negro</td>
                <td>Pantalones</td>
                <td>12</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Existencia</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php
    Private_Page::footerTemplate();
?>