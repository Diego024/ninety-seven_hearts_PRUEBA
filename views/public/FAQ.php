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
<!-- <br>
<div class="container-fluid d-flex flex-row justify-content-center">
    <div class="row" id="faqs"></div>
</div> -->
<div class="container" id="faqs">

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
Public_Page::footerTemplate('faqs');
?>