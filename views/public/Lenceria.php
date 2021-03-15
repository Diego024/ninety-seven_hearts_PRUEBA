<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Lencería', 'Lenceria');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('Lenceria')
?>

<br><!--TITULO-->
<!--JUMBOTRON-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Lenceria">
                <div class="container">
                    <h1 class="display-4">Lencería</h1>
                    <p class="lead">La mejor lencería para hacerte sentir como gustes.</p>
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
                <img src="https://i.pinimg.com/originals/3f/89/07/3f8907952f1fa0625224165108ccfcec.jpg" class="card-img-top" alt="..."  style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Lencería azul</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/236x/3a/2d/f5/3a2df5cb2fc94705ed40c8b7a781be20.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Lencería varicolor</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
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
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://images-americanas.b2w.io/produtos/2515384841/imagens/moda-feminina-de-quatro-pecas-lingerie-sexy-de-chiffon-cuecas-pijamas-sutia-fio-dental-cinta-liga/2515384841_1_large.jpg" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Set de lencería cuerpo completo</h5>
                    <p class="card-text">$35.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col text-center">
            <div class="card" style="width: 20rem;">
                <img src="https://i.pinimg.com/originals/05/6b/a6/056ba695f877804aca7f5468bff5473d.jpg" class="card-img-top" alt="..." style="Height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Set de lencería roja</h5>
                    <p class="card-text">$40.99</p>
                    <a href="#" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center" style="width: 20rem;">
                <img src="https://i0.wp.com/ae01.alicdn.com/kf/HTB1oi_Yob1YBuNjSszhq6AUsFXaG/3-piezas-ropa-interior-Mujer-encaje-Tanga-G-String-Sexy-Lencer%C3%ADa-mujer-Tanga-T-Mujer-ropa.jpg?crop=5,2,900,500&quality=2886" class="card-img-top" alt="..." style="height: 20rem">
                <div class="card-body">
                    <h5 class="card-title">Lencería 3 piezas</h5>
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