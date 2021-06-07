<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Bienvenido', 'index');
?>

<div class="separador"></div>


<!-- Public_Page::navbarTemplate(''); -->

<nav class="menu sticky-top">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>
<!--FIN DEL HEADER Y NAV-->

<!--INICIO CARRUSEL-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <!-- RESOLUCIÓN DE LAS IMAGENES DEL CAROUSEL  1850X700 -->
        <div class="carousel-item active">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-clothing-girl-fashion-snatch-image_17004.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-tanabata-jewelry-jewelry-banner-poster-background-jewelryfashion-accessoriesmothers-dayvalentines-image_60077.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-creative-minimalist-fashion-banner-background-backgroundcosmetic-backgroundpinkfashion-image_58373.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>

<!-- TITULO DE LA SECION -->
<?php
    Public_Page::titleTemplate('NOVEDADES');
?>
<!-- NOVEDADES -->
<br>
<div class="container d-flex flex-row justify-content-center">
    <div class="row" id="novedades">
    </div>
    <br>
</div>
<br>

<div class="separador"></div>

<?php
    Public_Page::footerTemplate('index')
?>