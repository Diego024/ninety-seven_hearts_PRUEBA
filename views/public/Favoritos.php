<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Favoritos', 'Favoritos');
?>

<div class="separador"></div>

<nav class="menu sticky-top">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>
<!--FIN DEL HEADER Y NAV-->

<!--TITULO-->
<div class="mt-4 mb-4">
    <?php
        Public_Page::titleTemplate('FAVORITOS');
    ?>
</div>

</div>
<!--CARDS-->
<div class="container mt-4">
    <div class="row" id="favoritos-container">
    </div>
</div>

<div class="separador mt-4"></div>
<?php
    Public_Page::footerTemplate('favoritos');
?>