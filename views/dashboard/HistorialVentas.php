<!DOCTYPE html>
<html>
    <head>
    <title>Historial de ventas</title>
        <link rel="stylesheet" href="../../resources/styles/css/dashboard/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!-- TITULO DE LA SECCIÓN -->
        <?php
            include('../../app/helpers/public_page.php');
            Public_Page::titleTemplate('HISTORIAL DE VENTAS');
        ?>
        <br>
        <!-- SELECCIONADOR -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <select id="inputState" class="form-control">
                        <option selected>Entregado</option>
                        <option>En proceso</option>
                        <option>Pendiente</option>
                        <option>Todos</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <!-- COMIENZO DE LA TABLA -->
        <div class="container">
            <table class="table table-striped table-bordered mydatatable" >
                                            <thead>
                                                <tr>
                                                    <th>Orden</th>
                                                    <th>Cliente</th>
                                                    <th>Monto</th>
                                                    <th>Fecha</th>
                                                    <th>Dirección</th>
                                                    <th>Estado</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </thead>
    
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Diego Moys</td>
                                                    <td>$30.00</td>
                                                    <td>15/03/2021</td>
                                                    <td>Col. Las Merceditas, San Marcos, San Salvador</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Diego Pacheco</td>
                                                    <td>$162.00</td>
                                                    <td>25/02/2021</td>
                                                    <td>Col. Jardínes de San Marcos</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fernando Alvarenga</td>
                                                    <td>$36.00</td>
                                                    <td>01/02/2021</td>
                                                    <td>Quezaltepeque</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Elmer Argueta</td>
                                                    <td>$36.99</td>
                                                    <td>15/03/2021</td>
                                                    <td>Av. Venezuela, San Salvador, San Salvador</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Diego Estrada</td>
                                                    <td>$368.00</td>
                                                    <td>01/01/2021</td>
                                                    <td>Mejicanos, San Salvador</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Elmer Argueta</td>
                                                    <td>$38.35</td>
                                                    <td>18/03/2021</td>
                                                    <td>Av. Venezuela, San Salvador, San Salvador</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Diego Estrada</td>
                                                    <td>$31.45</td>
                                                    <td>05/01/2021</td>
                                                    <td>Mejicanos, San Salvador</td>
                                                    <td>Entregado</td>
                                                    <td>Ver detalle...</td>
                                                </tr>
                                            </tbody>
    
                                            <tfoot>
                                                <tr>
                                                    <th>Orden</th>
                                                    <th>Cliente</th>
                                                    <th>Monto</th>
                                                    <th>Fecha</th>
                                                    <th>Dirección</th>
                                                    <th>Estado</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </tfoot>
            </table>
        </div>

        <!-- LINKS PARA LA LIBRERÍA DE LA TABLA -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.2/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.2/datatables.min.js"></script>
        <script>
            $('.mydatatable').DataTable();
        </script>
    </body>
</html>