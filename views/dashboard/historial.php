<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('index');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('HISTORIAL DE INICIOS DE SESIÓN');
?>

<!-- COMIENZO DE LA TABLA -->
<div class="container mt-4" id="table-container">
    <div class="search-container">
        <div class="add--icon__container d-flex justify-content-end" data-toggle="tooltip" data-placement="bottom" title="Agregar">
            <!-- FORM DEL SEARCH -->
            <form method="post" id="search-form" class="form-inline my-2 my-lg-0">
                <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" autocomplete="off" required>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
    
    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tbody-rows">
    </table>
</div>

<?php
    Private_Page::footerTemplate('historialLogIn');
?>