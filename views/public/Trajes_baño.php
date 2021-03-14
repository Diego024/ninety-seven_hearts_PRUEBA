<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Trajes de baño', 'Trajes_baño');
?>

<div class="separador"></div>

<?php
Public_Page::navbarTemplate('TrajesBaño');
?>
<br>
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-trajes">
                <div class="container">
                    <h1 class="display-4">Trajes de baño</h1>
                    <p class="lead">El verano se acerca, ¡Prepárate para recibirlo!</p>
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
                <img src="https://simages.tbdress.com/Upload/Image/2020/272/510-680/648a9b81-d0f8-42e7-a997-0ba468f7fc86.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño azul</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://www.calzedonia.com/dw/image/v2/BCXQ_PRD/on/demandware.static/-/Sites-CAL_EC_COM/default/dw590f65c2/images/SAS1747_wear_06_M.jpg?sw=400&sfrm=png" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño negro</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/d0/91/92/d09192bc9daaad13e2f0b554619fff2c.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño B&N</h5>
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
                <img src="https://image.made-in-china.com/202f0j10bdktJEnaEepv/Hot-Sale-Summer-High-Waist-Bikini-2019-Swimwear-Women-Push-up-Swimsuit-Sexy-Ruffle-Bathing-Suit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño blanco</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/r6vwt0dtseflgevmovra/traje-de-ba%C3%B1o-de-malla-de-una-sola-pieza-con-espalda-deportiva-hydralock-sculpt-XGcSN4.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño sport azul</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61ZShLtmlVL._AC_UX569_.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Traje de baño dos piezas</h5>
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