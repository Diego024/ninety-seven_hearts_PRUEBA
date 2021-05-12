<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('FAQs');
?>

<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('CATEGORÍAS');
?>
<br>
<!-- BOTÓN PARA EL MODAL DE CATEGORIAS -->
<div class="add--icon__container">
    <a href="" data-toggle="modal" data-target="#insertCategorias">
        <span class="material-icons green">
        add
        </span>
    </a>
</div>
<!-- INICIO DEL MODAL DE CATEGORIAS -->
<div class="modal fade" id="insertCategorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrege una categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!-- PREGUNTA Y RESPUESTA -->
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCity">Categoría</label>
                <input type="text" class="form-control" id="categoria">
            </div>
            <div class="form-group col-md-12">
                <label for="inputCity">Descripción</label>
                <input type="text" class="form-control" id="descripcion_categoria">
            </div>
            <div class="form-group col-md-12"  style="display: none">
                <label for="inputCity">Descripción</label>
                <input type="text" class="form-control" id="id_categoria">
            </div>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Tabla para mostrar los registros existentes -->
<table class="table">
    <!-- Cabeza de la tabla para mostrar los títulos de las columnas -->
    <thead>
        <tr>
            <!-- <th>IMAGEN</th> -->
            <th>NOMBRE</th>
            <th>DESCRIPCIÓN</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <!-- Cuerpo de la tabla para mostrar un registro por fila -->
    <tbody id="tbody-categorias">
    </tbody>
</table>


<!-- COMIENZO DE LA TABLA -->
<!-- <div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Camisas</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertCategorias">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pantalones</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertCategorias">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Accesorios</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertCategorias">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            <tr>
                <td>6</td>
                <td>Accesorios</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertCategorias">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Vestidos</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#insertCategorias">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div> -->

<?php
    Private_Page::footerTemplate();
?>