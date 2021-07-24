<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Index');
?>
<!-- TITULO DE LA SECCIÓN -->
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('ESTADÍSTICAS');
?>

<!-- DIV para ver las ventas mensuales -->
<div class="container my-4 w-75">
    <canvas id="ventasMensuales"></canvas>
</div>

<!-- DIV para ver los datos que más se venden -->
<div class="container my-4 d-flex flex-row">
    <div class="container w-50 h-100 my-4">
        <canvas id="productosMasVendidos"></canvas>
    </div>
    <div class="container w-50 h-100 my-4">
        <canvas id="categoriasMasVendidas"></canvas>
    </div>
</div>

<!-- DIV para ver los usuarios que más pedidos han realizado y los productos en inventario -->
<div class="container my-4 d-flex flex-row">
    <div class="container w-50 h-100 my-4">
        <canvas id="usuariosQueMasCompran"></canvas>
    </div>
    <div class="container w-50 h-100 my-4">
        <canvas id="categoriasEnCatalogo"></canvas>
    </div>
</div>

<?php
    Private_Page::footerTemplate('estadisticas');
?>
