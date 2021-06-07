<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Carrito', 'Carrito');
?>

<div class="separador"></div>

<nav class="menu sticky-top">
    <div class="menu--titulo">
        <a href="#" class="menu--titulo__texto">CATEGORIAS</a>
    </div>
    <div class="menu--categorias menu--hidden" id="categories">
    </div>
</nav>

<?php
    Public_Page::titleTemplate('MIS ARTÍCULOS')
?>

<!-- PRODUCTO DEL CARRITO -->
<div class="container">
    <div class="row">
        <div class="col-md-9" id="carrito-container">
        </div>
        <div class="col-sm-3">
            <div class="row">
                <div class="col-sm-12" id="finalizarPedido--contenedor" style="background: #FBD1CF;">
                    <h4 class="finalizarPedido--texto" id="quantity-products"></h4>
                    <h4 class="finalizarPedido--texto" id="total"></h4>                   
                    <div class="row">
                        <div class="col">
                            <button onclick=openCreateDialog() class="bbtn btn-dark" id="finalizarPedido--boton" data-toggle="modal" data-target="#confirmarPedido">
                                Realizar pedido
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DEL FORM -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Confirmación de pedido</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="post" id="save-form" enctype="multipart/form-data">
                <!-- COMENTARIO Y ORDEN_REGALO -->
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="comentario">Comentario sobre el pedido</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
                    </div>
    
                    <div class="form-group col-sm-12 ml-4">
                        <input class="form-check-input" type="checkbox" name="orden_regalo" value="true">
                        <label class="form-check-label" for="inlineCheckbox1">Este pedido es un regalo</label>
                    </div>
                </div>
                <!-- BOTONES DEL FORM -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
  </div>

<div class="separador mt-4"></div>

<?php
    Public_Page::footerTemplate('ordenes');
?>