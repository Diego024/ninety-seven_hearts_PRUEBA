<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Accesorios', 'Accesorios');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('Accesorios');
?>

<!--TITULO-->
<br>
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Accesorios">
                <div class="container">
                    <h1 class="display-4">Accesorios</h1>
                    <p class="lead">Los mejores accesorios que puedes encontrar están aquí.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!--CARDS-->
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Collar mariposas</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/564x/c0/06/32/c00632d6c85c7cce5d23cc664253ed92.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Collar estrellas</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://image.dhgate.com/0x0p/f2/albu/g6/M01/C6/F3/rBVaR1sfTECAfRVuAAHk0fezHv8875.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Collar perlas</h5>
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
                <img src="https://pulserasmoda.es/wp-content/uploads/2018/03/pulsera-mujer-personalizada.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pulsera estrella</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/614FBjWz0HL._AC_UY500_.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pulseras "Infinito"</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://images-na.ssl-images-amazon.com/images/I/711gxieaXTL._AC_UL1500_.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pulsera corazón</h5>
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