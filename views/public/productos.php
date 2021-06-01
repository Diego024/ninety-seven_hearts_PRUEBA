<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Productos', 'Vestidos');
?>

<div class="separador"></div>
<!-- NAVBAR -->
<nav class="menu sticky-top">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>

<!--JUMBOTRON-->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo-Vestidos">
                <div class="container">
                    <h1 class="display-4" id="title"></h1>
                    <p id="description" class="lead"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--CARDS-->
<div class="container">
    <div class="row" id="productos">
    </div>
</div>

<div class="separador"></div>
<?php
    Public_Page::footerTemplate('productos');
?>