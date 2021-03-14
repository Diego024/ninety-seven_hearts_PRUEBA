<?php

    include('../../app/helpers/public_page.php');

    Public_Page::headerTemplate('Preguntas Frecuentes', 'FAQ');
?>

<div class="separador"></div>

<?php
    Public_Page::navbarTemplate('');
?>
<br>
<!--JUMBOTRON -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid" id="jumbo">
                <div class="container">
                    <h1 class="display-4">Preguntas Frecuentes</h1>
                    <p class="lead">Aquí podrás encontrar las respuestas a las preguntas que tienes.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- INICIO DEL ACORDEÓN-->
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b> ¿Cómo es el modo de entrega?</b>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>La entrega se realiza en centros comerciales según acuerdo previo con el cliente, habiendo especificado la fecha y hora,
                            así como el lugar de la entrega.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b> ¿Cuánto cuesta el envío?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>El envío es completamente gratis para San Salvador y Santa Tecla, hacia otros departamentos, el precio de envío está sujeto a cambios.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b> ¿Cómo puedo consegui mi contenido?</b>
                                </button>
                            </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Inicia sesión en League of Legends después de canjear la oferta y tu vale por un fragmento de aspecto 
                            aleatorio gratis estará en la página de botín ¡esperando que lo abras! Si has creado una nueva cuenta, 
                            no olvides completar primero el tutorial para recibir el contenido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapsFour">
                            <b>¿Cuánto se tarda en llegar mi pedido?</b> 
                            </button>
                        </h2>
                    </div>

                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>El pedido tarda un aproximado de 3 días en llegar.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <b>¿Hasta dónde se puede hacer el envío?</b> 
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Se hacen envíos a todo el país, el costo de envío está sujeto a cambios.</p> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <b> ¿Qué hago si mi pedido no ha llegado?</b>
                                </button>
                            </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Si por algún motivo tu pedido no ha llegado, puedes comunicarte con nosotros para darle un seguimiento al caso; también
                            recuerda revisar bien los datos que el vendedor te solicitó al momento de coordinar la entrega, ya que pueden existir
                            malos entendidos con respecto a la coordinación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<!-- FIN DEL ACRODEÓN-->
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h2>¿No encuentras tu pregunta? Contáctanos</h2>
        </div>
    </div>
</div>
<div class="separador"></div>
<!--INICIO DEL FOOTER-->
<?php
    Public_Page::footerTemplate();
?>
    