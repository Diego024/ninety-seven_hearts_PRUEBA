<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Vestidos', 'Vestidos');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('Vestidos');
?>

<br>
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Vestidos">
                <div class="container">
                    <h1 class="display-4">Vestidos</h1>
                    <p class="lead">Lúcete en cualquier lugar con estos vestidos que te harán ver como el alma de la fiesta.</p>
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
                <img src="https://ae01.alicdn.com/kf/Ha7724f03694a40d0bee63394cbfa9a43E/Venta-caliente-vestidos-de-ni-a-con-flores-para-boda-alto-bajo-para-ni-as-peque.jpg_q50.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido dorado</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41enOOnSGML.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido rojo</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="http://sc04.alicdn.com/kf/H372c1fe0640640b598311691cddcd744N.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido amarillo</h5>
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
                <img src="http://sc01.alicdn.com/kf/HTB1nl1bao_rK1Rjy0Fcq6zEvVXa9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido rojo con flores</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="http://sc01.alicdn.com/kf/Ha5f24c94321249ffbff9c26785399a4aW.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido azul con flores</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/71/0b/c7/710bc7fcf808901207ed1f7077c23057.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido de girasoles</h5>
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