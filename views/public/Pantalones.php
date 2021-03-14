<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Pantalones', 'Pantalones');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('Pantalones')
?>
<br>
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Pantalones">
                <div class="container">
                    <h1 class="display-4">Pantalones</h1>
                    <p class="lead">Jeans, acampanados, joggers...¡Todo está aquí!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><!--CARDS-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/e4/09/af/e409af1fb23ed7703174ad3d1afe52a0.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pantalón formal para dama</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://www.dhresource.com/600x600s/f2-albu-g17-M01-FD-25-rBVa4V_QRUqAHfYjAAJLb3L5NrM644.jpg/women-casual-stitching-sweatpants-women-high.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pantalón tipo Jogger</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://img.ltwebstatic.com/images3_pi/2020/10/10/160233357044224ab3080c952835571fb40b02d26b_thumbnail_600x.webp" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pantalón jogger con cadenas</h5>
                    <p class="card-text">$36.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://ae01.alicdn.com/kf/HTB1kv83lkOWBuNjSsppq6xPgpXaY/Venta-caliente-Harem-Pantalones-mujer-2018-nuevo-verano-Ol-Pantalones-Casual-Harem-pantalones-el%C3%A1stico-de-alta.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pantalón rosado</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://www.dhresource.com/600x600s/f2-albu-g9-M00-C2-C9-rBVaWF1jKlSATP_WAAVG1LPj0tw683.jpg/arrival-jeans-wholesale-woman-denim-pencil.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pantalón Jeans azul</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://www.dhresource.com/f2/albu/g11/M01/7D/C3/rBNaFV8ZVm-Adf9ZAAGLoEFXwIk993.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Leggins de colores variados</h5>
                    <p class="card-text">$36.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br> <!--PAGINATION-->
<div class="container">
    <div class="row justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link text-danger" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link text-danger" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>

                </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="separador"></div>
<?php
    Public_Page::footerTemplate();
?>