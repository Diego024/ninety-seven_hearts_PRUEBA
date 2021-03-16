<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Bienvenido', 'index');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('');
?>

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
    Public_Page::titleTemplate('OFERTAS ESPECIALES');
?>
<br>

<!-- OFERTAS -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="../../resources/statics/images/blusa_negra.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blusa negra</h5>
                    <p class="card-text">$35.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="../../resources/statics/images/blusa_blanca.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blusa blanca</h5>
                    <p class="card-text">$40.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="../../resources/statics/images/blusa_dorada.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blusa dorada</h5>
                    <p class="card-text">$36.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        <a href="Ofertas.php" class="btn btn-secondary" id="btn_ver">Ver más...</a>
        </div>
    </div>
</div>
<br>

<!-- TITULO DE LA SECION -->
<?php
    Public_Page::titleTemplate('NOVEDADES');
?>
<!-- NOVEDADES -->
<br>
<div class="container">
    <div class="row align-items-center">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="../../resources/statics/images/regalo.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Regalo bonito (opción 1)</h5>
                    <p class="card-text">$35.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="../../resources/statics/images/regalo2.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Regalo bonito (opción 2)</h5>
                    <p class="card-text">$40.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="../../resources/statics/images/regalo3.jpeg" class="card-img-top" alt="..." style="height: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Regalo bonito (opción 3)</h5>
                    <p class="card-text">$36.99</p>
                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        <a href="Novedades.php" class="btn btn-secondary" id="btn_ver">Ver más...</a>
        </div>
    </div>
</div>
<br>

<div class="separador"></div>

<?php
    Public_Page::footerTemplate()
?>