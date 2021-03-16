<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Pedidos');
?>
<!-- TITULO DE LA SECCIÓN -->
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('PEDIDOS');
?>
<br>
<!-- SELECCIONADOR -->
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <select id="inputState" class="form-control">
                <option selected>Entregado</option>
                <option>En proceso</option>
                <option>Pendiente</option>
                <option>Todos</option>
            </select>
        </div>
    </div>
</div>
<br> -->
<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped table-bordered mydatatable" >
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th>Detalles</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Diego Moys</td>
                    <td>$30.00</td>
                    <td>15/03/2021</td>
                    <td>Col. Las Merceditas, San Marcos, San Salvador</td>
                    <td>En proceso</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Diego Pacheco</td>
                    <td>$162.00</td>
                    <td>25/02/2021</td>
                    <td>Col. Jardínes de San Marcos</td>
                    <td>En proceso</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fernando Alvarenga</td>
                    <td>$36.00</td>
                    <td>01/02/2021</td>
                    <td>Quezaltepeque</td>
                    <td>En proceso</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Elmer Argueta</td>
                    <td>$36.99</td>
                    <td>15/03/2021</td>
                    <td>Av. Venezuela, San Salvador, San Salvador</td>
                    <td>Pendiente</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Diego Estrada</td>
                    <td>$368.00</td>
                    <td>01/01/2021</td>
                    <td>Mejicanos, San Salvador</td>
                    <td>Pendiente</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Elmer Argueta</td>
                    <td>$38.35</td>
                    <td>18/03/2021</td>
                    <td>Av. Venezuela, San Salvador, San Salvador</td>
                    <td>Pendiente</td>
                    <td>Ver detalle...</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Diego Estrada</td>
                    <td>$31.45</td>
                    <td>05/01/2021</td>
                    <td>Mejicanos, San Salvador</td>
                    <td>Pendiente</td>
                    <td>Ver detalle...</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th>Orden</th>
                    <th>Cliente</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th>Detalles</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <br>
    <div class="row justify-content-center">
        <a href="#" class="btn btn-danger" id="btn-Pedidos">Finalizar pedido</a>
    </div>

</div>
<br>
<?php
    Private_Page::footerTemplate();
?>