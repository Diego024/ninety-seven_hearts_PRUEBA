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
<!-- FORMULARIO DE BÚSQUEDA-->
<div class="container">
    <div>
        <form method="post" id="search-form" class="form-inline my-2 my-lg-0">
            <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>

<br>
<!-- COMIENZO DE LA TABLA -->
<div class="container" id="table-container">
    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows">
    </table>
</div>
<?php
Private_Page::footerTemplate('datos');
?>