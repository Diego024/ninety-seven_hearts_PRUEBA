<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Camisa Vogue', 'Producto');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('');
?>

<div class="container producto--contenedor">
    <div class="row">
        <div class="col-md-4">
            <img src="https://i.pinimg.com/originals/05/b4/12/05b412352c9377a2fcf28f86a7038fac.jpg" class="img-fluid" id="producto--img" alt="...">
        </div>
        <div class="col-lg-8">
            <h3 class="producto--info__titulo">
                Camisa Vogue
            </h3>
            <h3 class="producto--info__precio">
                $49.99
            </h3>
            
            <div>
                <label for="inputState">Talla: </label>
                <select id="inputState" class="form-control-sm">
                    <option selected>Seleccione una talla</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            </div>

            <div>
                <label for="inputState">Cantidad: </label>
                <select id="inputState" class="form-control-sm">
                    <option selected>Seleccione una cantidad</option>
                    <option value="1">1</option>  
                    <option value="2">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    <option value="6">7</option>
                </select>
            </div>

            <div>
                <button type="button" class="bbtn btn-dark" id="agregarCarrito--boton" data-toggle="modal" data-target="#confirmarPedido">
                    Agregar al carrito
                </button>
            </div>
            
            <h3 class="producto--info__descripcion" style="margin-top: 25px;">
                Descripción:
            </h3>
            
            <p>El nuevo capítulo de Ann Demeulemeester sin Ann Demeulemeester no podría ser más fiel a la diseñadora belga</p>

            <div class="agregarComentario--contenedor">
                <a href="" class="agregarComentario--enlace">
                    Agregar comentario
                </a>
            </div>
            
        </div>
        <div class="col comentarios--contenedor">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nuevo comentario:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="button" class="bbtn btn-dark" id="comentario--boton" data-toggle="modal" data-target="#confirmarPedido">
                    Guardar comentario
                </button>
            </div>
            <div class="media">
                <img src="../../resources/statics/icons/usuarios.png" class="mr-3 comentario--img" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">Diego Moys</h5>
                    <p>Me pareció buen producto y el horario de entrega bastante óptimo para acoplarse a mis horarios.</p>
                
                    <div class="media mt-3">
                    <a class="mr-3" href="#">
                        <img src="../../resources/statics/icons/usuarios.png" alt="..." class="comentario--img">
                    </a>
                    <div class="media-body">
                        <h5 class="mt-0">Ninety-Seven Hearts</h5>
                        <p>Muchas gracias por tu comentario, apreciamos tu valoración</p>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
<div class="separador"></div>
<?php
    Public_Page::footerTemplate();
?>