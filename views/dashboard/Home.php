<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Index');
?>
<br>

<!-- <?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('NUEVOS PEDIDOS');
?>
<br>

<div class="container">
    <h4 id="newOrders-warning" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="newOrders-rows">
    </table>
</div> -->


<br>
<?php
    Public_Page::titleTemplate('PRODUCTOS CON POCAS EXISTENCIAS');
?>
<br>

<div class="container">
    <h4 id="lowStock-warning" style="text-align:center"></h4>
    <table class="table table-striped table-bordered mydatatable" id="lowStock-rows">
    </table>
</div>

<?php
    Private_Page::footerTemplate('home');
?>