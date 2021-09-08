<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Error 404', 'SobreNosotros');
?>
<br>
    <div class="container">
        <img src="../../resources/imageFiles/public/undraw_page_not_found_su7k.svg" alt="">
        <br>
        <h1 class="text-center">¡LO SENTIMOS! No pudimos encontrar la página que estabas buscando, has click <a href="/ninety-seven_hearts_PRUEBA/views/public/index.php">AQUÍ </a> para regresar</h1>
    </div>  
<div class="separador"></div>
<?php
Public_Page::footerTemplate('404');
?>