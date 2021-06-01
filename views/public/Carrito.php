<?php
    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Carrito', 'Carrito');
?>

<div class="separador"></div>

<?php
    Public_Page::titleTemplate('MIS ARTÍCULOS')
?>

<!-- PRODUCTO DEL CARRITO -->
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="carta--contenedor__titulo">
                                <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                <p>$49.99</p>
                            </div>
                            
                            <div class="form-group col-md-4">
                                
                                <label for="inputState">Talla: </label>
                                <select id="inputState" class="form-control-sm">
                                    <option selected>Seleccione una talla</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
    
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

                                <div class="carrito--enlace__contenedor">
                                    <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="carta--contenedor__titulo">
                                <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                <p>$49.99</p>
                            </div>
                            
                            <div class="form-group col-md-4">
                                
                                <label for="inputState">Talla: </label>
                                <select id="inputState" class="form-control-sm">
                                    <option selected>Seleccione una talla</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
    
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

                                <div class="carrito--enlace__contenedor">
                                    <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://ae01.alicdn.com/kf/Hd2aa5da992874feaaa94b69489afbe09L/Collar-de-oro-y-Metal-con-forma-de-mariposa-para-mujer-gargantilla-joyer-a-cadena-colgante.jpg_q50.jpg" alt="..." class="producto--img" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="carta--contenedor__titulo">
                                <a href=""><h5 class="card-title card--titulo">Collar de mariposas</h5></a>
                                <p>$49.99</p>
                            </div>
                            
                            <div class="form-group col-md-4">
                                
                                <label for="inputState">Talla: </label>
                                <select id="inputState" class="form-control-sm">
                                    <option selected>Seleccione una talla</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
    
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

                                <div class="carrito--enlace__contenedor">
                                    <a href="" class="carrito--enlace"><p>Eliminar producto</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <div class="col-sm-12" id="finalizarPedido--contenedor" style="background: #FBD1CF;">
                    <h4 class="finalizarPedido--texto">Subtotal (3 Productos):</h4>
                    <h4 class="finalizarPedido--texto">$185.99</h4>

                    <div class="form-check form-check-inline finalizarPedido--opcionRegalo">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Este pedido es un regalo</label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="bbtn btn-dark" id="finalizarPedido--boton" data-toggle="modal" data-target="#confirmarPedido">
                                Realizar pedido
                            </button>
                        </div>
                    </div>
                
                    <!-- Modal -->
                    <div class="modal fade" id="confirmarPedido" tabindex="-1" aria-labelledby="confirmarPedidoLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="confirmarPedidoLabel">¿Seguro que quiere confirmar su pedidio?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Al confirmar el pedido nos contactaremos con usted para acordar la entrega.
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-dark" id="modal--btn">Confirmar</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12" id="recomendaciones--contenedor">
                    <h4 class="recomendaciones--texto">
                        Más productos que te pueden gustar
                    </h4>

                    <div class="recomendaciones--contenedor__img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/614FBjWz0HL._AC_UY500_.jpg" class="img-fluid recomendaciones--img " alt="...">
                        <a class="recomendaciones--producto__titulo">Pulseras "Infinito"</a>
                        <p class="recomendaciones--producto__precio">$49.99</p>
                    </div>

                    <div class="recomendaciones--contenedor__img">
                        <img src="https://image.dhgate.com/0x0p/f2/albu/g6/M01/C6/F3/rBVaR1sfTECAfRVuAAHk0fezHv8875.jpg" class="img-fluid recomendaciones--img " alt="...">
                        <a class="recomendaciones--producto__titulo">Collar de perlas</a>
                        <p class="recomendaciones--producto__precio">$49.99</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="separador"></div>

<?php
    Public_Page::footerTemplate('ordenes');
?>