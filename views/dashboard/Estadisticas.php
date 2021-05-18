<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Index');
?>
<!-- TITULO DE LA SECCIÓN -->
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('ESTADÍSTICAS');
?>
<br>
<div class="container">
    <div class="form-group col-md-4">
        <label for="inputState">Seleccione el rango de fechas</label>
        <select id="inputState" class="form-control">
            <option selected>Semanal</option>
            <option>Mensual</option>
            <option>Diaria</option>
        </select>
    </div>
</div>
<br>
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="../../resources/statics/images/titulo.jpeg" alt="" style="Height: 28rem; Width: 36rem">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="../../resources/statics/images/grafico_barras.jpeg" alt="" style="Height: 28rem; Width: 36rem">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="../../resources/statics/images/grafico_lineas.jpeg" alt="" style="Height: 28rem; Width: 36rem">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="../../resources/statics/images/grafico_pastel.jpeg" alt="" style="Height: 28rem; Width: 36rem">
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-sm-12 col-md-12">
            <div class="card" >
                <img src="../../resources/imageFiles/dashboard/index/titulo.jpeg" class="card-img-top" alt="..." style="Height: 24rem; Width: 95%">
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 col-md-12">
            <div class="card" >
                <img src="../../resources/imageFiles/dashboard/index/grafico_barras.jpeg" class="card-img-top" alt="..." style="Height: 24rem; Width: 95%">
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-xl-6 col-sm-12 col-md-12">
            <div class="card" >
                <img src="../../resources/imageFiles/dashboard/index/grafico_lineas.jpeg" class="card-img-top" alt="..." style="Height: 24rem; Width: 95%">
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 col-md-12">
            <div class="card" >
                <img src="../../resources/imageFiles/dashboard/index/grafico_pastel.jpeg" class="card-img-top" alt="..." style="Height: 24rem; Width: 95%">
            </div>
        </div>
    </div>
</div>
<br>
<?php
    Private_Page::footerTemplate('estadisticas');
?>
