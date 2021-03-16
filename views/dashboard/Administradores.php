<?php
    include('../../app/helpers/private_page.php');

    Private_Page::sidebarTemplate('Administradores');
?>

<!-- TITULO DE LA SECCIÓN -->
<br>
<?php
    include('../../app/helpers/public_page.php');
    Public_Page::titleTemplate('ADMINISTRADORES');
?>
<br>
<!-- COMIENZO DEL FORM -->
<div class="container">
    <form>
        
        <!-- NOMBRES Y APELLIDO -->
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Nombres</label>
            <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Apellidos</label>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
        </div>
        <!-- USUARIO Y EMAIL -->
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Usuario</label>
            <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Email</label>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
        </div>
        <!-- TELEFONO Y GENERO -->
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Teléfono</label>
            <input type="text" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Genero</label>
                <select id="inputState" class="form-control" data-live-search="false">
                    <option selected>Femenino</option>
                    <option>Masculino</option>
                </select>
            </div>
        </div>
        <!-- PRODUCTO Y FECHA DE NACIMIENTO -->
        <div class="form-row"> 
            <div class="form-group col-md-6 search_select_box">
                <label for="inputState">Estado de la cuenta</label>
                <select id="inputState" class="form-control" data-live-search="false">
                    <option selected>Activa</option>
                    <option>Inactiva</option>
                    <option>Bloqueada</option>
                </select>
            </div>
            <div class="col">
                <label for="inputState">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
        </div>
        <!-- DIRECCION Y FOTO -->
        <div class="form-row"> 
            <div class="form-group col-md-6">
                <label for="inputCity">Dirección</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Foto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>

        <br>
        <!-- BOTONES -->
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar administrador</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar administrador</button>
        <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar administrador</button>
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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Diego Josué</td>
                <td>Rosa Pacheco</td>
                <td>Pacheco</td>
                <td>Activo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fernando José</td>
                <td>Alvarenza Muñoz</td>
                <td>Alvarenga</td>
                <td>Bloqueado</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Diego Fernando</td>
                <td>Moys Romero</td>
                <td>Moys</td>
                <td>Inactivo</td>
            <tr>
                <td>6</td>
                <td>Samuel Eduardo</td>
                <td>Herrera Tobar</td>
                <td>Sam</td>
                <td>Bloqueado</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
        </tfoot>
    </table>
</div>
<?php
    Private_Page::footerTemplate();
?>