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

<!-- ESTE DIV ESTÁ OCULTANDO EL FORMULARIO -->
<div style="display: none">
        <form>
            
            

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
</div>
<!-- ----------------- -->


<div class="add--icon__container">
    <a href="" data-toggle="modal" data-target="#insertAdmin">
        <span class="material-icons green">
        add
        </span>
    </a>
</div>

<!-- MODAL DEL INSERT -->
<div class="modal fade" id="insertAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrege un administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL DEL INSERT -->
<div class="modal fade" id="updateAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrege un administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- COMIENZO DE LA TABLA -->
<div class="container">
    <table class="table table-striped table-bordered mydatatable" >
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Diego Josué</td>
                <td>Rosa Pacheco</td>
                <td>Pacheco</td>
                <td>Activo</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">   
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#updateAdmin">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <!-- <td>2</td> -->
                <td>Fernando José</td>
                <td>Alvarenza Muñoz</td>
                <td>Alvarenga</td>
                <td>Bloqueado</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#updateAdmin">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <!-- <td>4</td> -->
                <td>Diego Fernando</td>
                <td>Moys Romero</td>
                <td>Moys</td>
                <td>Inactivo</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#updateAdmin">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            <tr>
                <!-- <td>6</td> -->
                <td>Samuel Eduardo</td>
                <td>Herrera Tobar</td>
                <td>Sam</td>
                <td>Bloqueado</td>
                <td class="icons">
                    <a href="">
                        <span class="material-icons red">
                            delete
                        </span>
                    </a>
                    <a href="" data-toggle="modal" data-target="#updateAdmin">
                        <span class="material-icons blue">
                            edit
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>

        <!-- <tfoot>
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
        </tfoot> -->
    </table>
</div>
<?php
    Private_Page::footerTemplate();
?>