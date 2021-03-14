<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Hogareña', 'Hogareña');
?>

<?php
    Public_Page::navbarTemplate('Hogar')
?>

<br><!--TITULO-->
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Hogareña">
                <div class="container">
                    <h1 class="display-4">Ropa Hogareña</h1>
                    <p class="lead">Ropa ideal para pasar cómodo en la casa.</p>
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
                <img src="https://i.pinimg.com/474x/86/03/bf/8603bfa28e7debc2131a094994b47034.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama con diseño ovejas</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://www.dhresource.com/600x600s/f2-albu-g9-M00-9A-AF-rBVaWF02fOiAR5FeAAI62yoxLxY507.jpg/womens-silk-satin-pajamas-pyjamas-set-long.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama azul</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="http://sc01.alicdn.com/kf/HTB1Ms07eROD3KVjSZFFq6An9pXat.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama con estilo de unicornio</h5>
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
                <img src="https://i.pinimg.com/originals/3d/72/39/3d723938462a7ea78ce74d57ddf08c0f.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama blanca con puntos</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://image.made-in-china.com/202f0j10IHNYZmTBMvby/Cheap-Wholesale-Fashion-Women-Comfortable-Solid-Color-Pajamas.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama roja</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://gloimg.rglcdn.com/rosegal/pdm-product-pic/Clothing/2018/08/01/goods-img/1545041608239631819.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama rosa con negro</h5>
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