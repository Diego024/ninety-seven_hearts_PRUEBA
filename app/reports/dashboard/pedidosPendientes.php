<?php
// Se verifica si existe el parámetro id en la url, de lo contrario se direcciona a la página web de origen.
if (isset($_GET['id'])) {
    require('../../helpers/report.php');
    require('../../models/datos.php');

    // Se instancia el módelo Categorias para procesar los datos.
    $datos = new Datos;

    // Se verifica si el parámetro es un valor correcto, de lo contrario se direcciona a la página web de origen.
    if ($datos->setIdOrdenCompra($_GET['id'])) {
        // Se verifica si la categoría del parametro existe, de lo contrario se direcciona a la página web de origen.
        if ($rowPedido = $datos->selectOnePedido()) {
            // Se instancia la clase para crear el reporte.
            $pdf = new Report;
            // Se inicia el reporte con el encabezado del documento.
            $pdf->startReport('Detalle del pedido');
            // Se verifica si existen registros (productos) para mostrar, de lo contrario se imprime un mensaje.
            if ($dataProductos = $datos->selectDetalle()) {
                // Se establece un color de relleno para los encabezados.
                $pdf->SetFillColor2(131, 38, 90);
                // Se establece la fuente para los encabezados.
                $pdf->SetFont('Times', 'B', 11);
                // Se imprimen las celdas con los encabezados.
                $pdf->Cell(100, 10, utf8_decode('Producto'), 1, 0, 'C', 1);
                $pdf->Cell(40, 10, utf8_decode('Cantidad'), 1, 0, 'C', 1);
                $pdf->Cell(46, 10, utf8_decode('Precio (US$)'), 1, 1, 'C', 1);
                // Se establece la fuente para los datos de los productos.
                $pdf->SetFont('Times', '', 11);
                // Se recorren los registros ($dataProductos) fila por fila ($rowProducto).
                foreach ($dataProductos as $rowProducto) {
                    // Se imprimen las celdas con los datos de los productos.
                    $pdf->Cell(100, 10, utf8_decode($rowProducto['catalogo_producto']), 1, 0);
                    $pdf->Cell(40, 10, utf8_decode($rowProducto['cantidad']), 1, 0);
                    $pdf->Cell(46, 10, $rowProducto['subtotal'], 1, 1);
                }
            } else {
                $pdf->Cell(0, 10, utf8_decode('No hay productos para esta categoría'), 1, 1);
            }
            // Se envía el documento al navegador y se llama al método Footer()
            $pdf->Output();
        } else {
            header('location: ../../../views/dashboard/categorias.php');
        }
    } else {
        header('location: ../../../views/dashboard/categorias.php');
    }
} else {
    header('location: ../../../views/dashboard/categorias.php');
}
?>