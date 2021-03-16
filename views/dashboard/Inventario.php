<!DOCTYPE html>
<html>
    <head>
    <title>Inventario</title>
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/index.css">
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/Inventario.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!-- TITULO DE LA SECCIÓN -->
        <?php
            include('../../app/helpers/public_page.php');
            Public_Page::titleTemplate('INVENTARIO');
        ?>
        <br>
        <!-- COMIENZO DEL FORM -->
        <div class="container">
            <form>
                <!-- PRODUCTO Y FECHA DE INGRESO -->
                <div class="form-row"> 
                    <div class="form-group col-md-6 search_select_box">
                        <label for="inputState">Producto</label>
                        <select id="inputState" class="form-control" data-live-search="true">
                            <option selected>Camiseta estampada negra</option>
                            <option>Vestido Azul con flores</option>
                            <option>Vestido Rojo con flores</option>
                            <option>Pantalón negro</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="inputState">Fecha de ingreso</label>
                        <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                </div>
                <!-- CANTIDAD Y PRECIO -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Cantidad</label>
                    <input type="text" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputCity">Precio adquirido($)</label>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
                    </div>
                </div>
                <!-- BOTONES -->
                <button type="submit" class="btn btn-primary" id="btn-Inventario">Agregar entrada</button>
                <button type="submit" class="btn btn-primary" id="btn-Inventario">Editar entrada</button>
                <button type="submit" class="btn btn-primary" id="btn-Inventario">Eliminar entrada</button>
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
                        <th>Cantidad</th>
                        <th>Fecha de ingreso</th>
                        <th>Precio adquirido</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pantalón negro</td>
                        <td>100</td>
                        <td>15/03/2021</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pantalón negro</td>
                        <td>100</td>
                        <td>02/03/2021</td>
                        <td>$110.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Camiseta negra estampada</td>
                        <td>50</td>
                        <td>01/02/2021</td>
                        <td>$40.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Vestido rojo de flores</td>
                        <td>15</td>
                        <td>15/03/2021</td>
                        <td>$30.50</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pijama de unicornio</td>
                        <td>50</td>
                        <td>01/01/2021</td>
                        <td>$120.00</td>
                    </tr>
                     <tr>
                        <td>6</td>
                        <td>Pijama de unicornio</td>
                        <td>10</td>
                        <td>02/02/2021</td>
                        <td>$110.99</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Juegos de lencería</td>
                        <td>25</td>
                        <td>05/01/2021</td>
                        <td>$63.55</td>
                    </tr>
                </tbody>
    
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Fecha de ingreso</th>
                        <th>Precio adquirido</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- LINKS PARA LA LIBRERÍA DE LA TABLA -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.2/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.2/datatables.min.js"></script>
        <script>
            $('.mydatatable').DataTable();
        </script>

        <!-- PARA EL LIVE SEARCH -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script>
            $(function () {
                $('select').selectpicker();
            });
        </script>
    </body>
</html>