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
    