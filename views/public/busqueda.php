<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Productos', 'Vestidos');
?>

<div class="separador"></div>

<nav class="menu sticky-top mb-4">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>

<?php
    Public_Page::titleTemplate('RESULTADO DE BÚSQUEDA');
?>

<!--CARDS-->
<div class="container">
    <div class="row mt-4" id="productos">
    </div>
</div>

<div class="separador"></div>
<?php
    Public_Page::footerTemplate('busqueda');
?>