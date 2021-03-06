<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Camisa Vogue', 'Producto');
?>

<div class="separador"></div>

<nav class="menu sticky-top">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>
<!--FIN DEL HEADER Y NAV-->

<div class="container producto--contenedor mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="" class="img-fluid" id="producto--img" alt="...">
        </div>
        <div class="col-lg-8">
            <h3 class="producto--info__titulo" id="catalogo_producto">
                
            </h3>
            <h3 class="producto--info__precio mt-4" id="precio">
                
            </h3>

            <form method="post" id="carrito-form" class="my-2 my-lg-0">
                <div>
                    <!-- Campo invicible del ID del producto -->
                    <input class="d-none" type="number" id="id_producto-carrito" name="id_catalogo_producto">

                    <label for="inputState">Cantidad: </label>
                    <input name="cantidad" id="cantidad" type="number" min="1" max="4">
                </div>

                <div>
                    <button type="submit" class="bbtn btn-dark rounded mb-2" id="agregarCarrito--boton">
                        Agregar al carrito
                    </button>
                </div>
            </form>
            
            <a onclick=crearFavorito() id="btn_eliminar"><b>Agregar a favoritos</b></a>

            <h3 class="producto--info__descripcion mt-4" style="margin-top: 25px;">
                Descripción:
            </h3>
            
            <p id='producto-descripcion'></p>
            
        </div>
        <div class="col comentarios--contenedor mt-4">
            
            <form method="post" id="comment-form" class="my-2 my-lg-0">
                <!-- Campo invicible del ID del producto -->
                <input class="d-none" type="number" id="id_catalogo_producto" name="id_catalogo_producto">

                <label for="comentario">Nuevo comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>

                <div class="form-row mt-2 w-25">
                    <label for="valoracion">Valoración:</label>
                    <input name="valoracion" step="any" class="form-control" id="valoracion" type="number" min="1" max="10">
                </div>

                <button type="submit" id="comentario--boton" class="bbtn btn-dark mt-4 rounded">
                    Guardar comentario
                </button>
            </form>
 
            <div class="container mb-4 mt-4">
                <div class="row" id="comments-container">
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="separador"></div>
<?php
    Public_Page::footerTemplate('producto');
?>