<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Camisetas', 'Camisetas');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('Camisetas')
?>

<br><!--TITULO-->
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Camisetas">
                <div class="container">
                    <h1 class="display-4">Camisetas</h1>
                    <p class="lead">Camisetas a tu estilo.</p>
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
                <img src="https://ae01.alicdn.com/kf/HTB11jkbanCWBKNjSZFtq6yC3FXan.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Gucci</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/05/b4/12/05b412352c9377a2fcf28f86a7038fac.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Vogue</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://s.alicdn.com/@sc01/kf/H811163cc62554c17bdd38fd83b2c238bb.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camiseta pintada a mano</h5>
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
                <img src="https://i.pinimg.com/originals/f5/35/00/f53500712cbe54a603f62c83f9a30233.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camisa negra estampada</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://sc04.alicdn.com/kf/H1ef3ec1c3b95456b912f2cc726c3e21f0.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camisa "Wonder Woman"</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://m.media-amazon.com/images/I/51NFMB8th9L.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camisa con diseño de flores</h5>
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
    <!--INICIO DEL FOOTER-->
<?php
    Public_Page::footerTemplate();
?>