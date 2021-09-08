<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Error 403', 'SobreNosotros');
?>
<br>
    <div class="container">
        <img src="../../resources/imageFiles/public/undraw_Notify_re_65on.svg" alt="">
        <br>
        <h1 class="text-center">¡CUIDADO! El acceso a esta página es restringido, has click <a href="/ninety-seven_hearts_PRUEBA/views/public/index.php">AQUÍ </a> para regresar</h1>
    </div>  
<div class="separador"></div>
<?php
Public_Page::footerTemplate('403');
?>