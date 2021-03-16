<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Inventario');
?>
<!-- TITULO DE LA SECCIÓN -->
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('CATÁLOGO');
?>
<br>
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>
        <!-- PRODUCTO Y PMP -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Producto</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">PMP($)</label>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
        </div>
        <!-- EXISTENCIA Y PRECIO DE VENTA -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Existencia</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Precio de venta($)</label>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
        </div>
        <!-- CATEGORÍA Y DESCUENTO -->
        <div class="form-row"> 
            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Categoría</label>
                <select id="inputState" class="form-control">
                    <option selected>Camisetas</option>
                    <option>Pantalones</option>
                    <option>Vestidos</option>
                    <option>Lencería</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Descuento(%)</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
        </div>
        <!-- DESCRIPCIÓN Y FOTO -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Descripción</label>
                <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Foto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <!-- BOTONES -->
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar producto</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar producto</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar producto</button>
    </form>
</div>
<br>
<div class="separador"></div>
<br>
<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Existencia</th>
                <th>PMP</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Descripción</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Pantalón negro</td>
                <td>100</td>
                <td>$15.65</td>
                <td>$35.99</td>
                <td>Pantalones</td>
                <td>Pantalón color negro de tela. Tallas desde XS hasta M.</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Camiseta negra estampada</td>
                <td>50</td>
                <td>$6.55</td>
                <td>$15.99</td>
                <td>Camisetas</td>
                <td>Camiseta con estampado de caricaturas.</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Vestido rojo de flores</td>
                <td>15</td>
                <td>$39.68</td>
                <td>$46.25</td>
                <td>Vestidos</td>
                <td>Vestido color rojo con estampado de flores rojas. Tllas desde XS hasta L.</td>
            </tr>
                <tr>
                <td>5</td>
                <td>Pijama de unicornio</td>
                <td>10</td>
                <td>$15.88</td>
                <td>$45.99</td>
                <td>Hogareña</td>
                <td>Pijama de cuerpo completo con diseño de unicornio azul. Tallas desde XS hasta XL.</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Juegos de lencería</td>
                <td>25</td>
                <td>$20.45</td>
                <td>$38.99</td>
                <td>Lencería</td>
                <td>Juego de 3 piezas de lencería, colores surtidos. Tallas desde XS hasta M.</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Existencia</th>
                <th>PMP</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Descripción</th>
            </tr>
        </tfoot>
    </table>
</div>
<?php
    Private_Page::footerTemplate();
?>