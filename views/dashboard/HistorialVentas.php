<?php
include('../../app/helpers/private_page.php');

Private_Page::sidebarTemplate('Index');
?>
<!-- TITULO DE LA SECCIÓN -->
<?php
include('../../app/helpers/public_page.php');
Public_Page::titleTemplate('HISTORIAL DE VENTAS');
?>
<br>

<br>
<!-- COMIENZO DE LA TABLA -->
<div class="container" id="table-container">
    <div class="search-container">
        <div class="add--icon__container" data-toggle="tooltip" data-placement="bottom" style="justify-content:flex-end;">

        <!-- Enlace para generar un reporte en formato PDF -->
        <a href="../../app/reports/dashboard/historialPedidos.php" target="_blank" class="btn waves-effect amber tooltipped" data-tooltip="Reporte de productos por categoría"><i class="material-icons">assignment</i></a>
            <!-- FORM DEL SEARCH -->
            <form method="post" id="search-form" class="form-inline my-2 my-lg-0">
                <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows-historial">
    </table>
</div>
<?php
Private_Page::footerTemplate('historial');
?>