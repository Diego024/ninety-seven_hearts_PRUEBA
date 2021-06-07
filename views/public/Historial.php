<?php

include('../../app/helpers/public_page.php');

Public_Page::headerTemplate('Historial de compras', 'Historial');
?>

<div class="separador"></div>

<br>
<!--TITULO-->
<div class="mt-4 mb-4">
    <?php
        Public_Page::titleTemplate('HISTORIAL DE COMPRAS');
    ?>
</div>

<!-- MODAL DEL FORM -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="detalle" enctype="multipart/form-data">
                    <!-- Campo invicible del ID del producto -->
                    <input class="d-none" type="number" id="id_orden_compra" name="id_orden_compra">

                </form>
            </div>
        </div>
    </div>
</div>

<!-- COMIENZO DE LA TABLA PEDIDOS-->
<div class="container" id="table-container">
    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="historial">
    </table>
</div>
<br>

<!-- COMIENZO DE LA TABLA DETALLE-->
<div class="container" id="table-detalle">
    <h4 id="warning-message" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="tb_detalle">
    </table>
</div>
<div class="separador"></div>
<!--INICIO DEL FOOTER-->
<?php
Public_Page::footerTemplate('historial');
?>