<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Favoritos', 'Favoritos');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('');
?>

<br><!--TITULO-->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>FAVORITOS</h2>
        </div>
    </div>
</div>
<br><!--CARDS-->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/f5/35/00/f53500712cbe54a603f62c83f9a30233.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Camisa negra estampada</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
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
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://image.dhgate.com/0x0s/f2-albu-g10-M00-F4-5D-rBVaWVx_Mm2AZJ8yAAWk92Qi7VU719.jpg/para-mujer-sissy-lencer-a-sexy-bikini-lace.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Set de lencería</h5>
                    <p class="card-text">$36.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/564x/c0/06/32/c00632d6c85c7cce5d23cc664253ed92.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Collar estrellas</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
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
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i.pinimg.com/474x/86/03/bf/8603bfa28e7debc2131a094994b47034.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Pijama con diseño ovejas</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                    <a href="#" id="btn_eliminar"><b>Eliminar de favoritos</b></a>
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