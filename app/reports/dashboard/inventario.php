<?php
require('../../helpers/report.php');
require('../../models/inventario.php');

// Se instancia la clase para crear el reporte.
$pdf = new Report;
// Se inicia el reporte con el encabezado del documento.
$pdf->startReport('Entradas por producto');

// Se instancia el módelo Categorías para obtener los datos.
$inventario = new Inventario;
// Se verifica si existen registros (categorías) para mostrar, de lo contrario se imprime un mensaje.
if ($dataProductos = $inventario->selectProducts()) {
    // Se recorren los registros ($dataCategorias) fila por fila ($rowCategoria).
    foreach ($dataProductos as $rowProductos) {
        // Se establece un color de relleno para mostrar el nombre de la categoría.
        $pdf->SetFillColor2(131, 38, 90);
        // Se establece la fuente para el nombre de la categoría.
        $pdf->SetFont('Times', 'B', 12);
        // Se imprime una celda con el nombre de la categoría.
        $pdf->Cell(0, 10, utf8_decode('Producto: '.$rowProductos['catalogo_producto']), 1, 1, 'C', 1);
        // Se establece la categoría para obtener sus productos, de lo contrario se imprime un mensaje de error.
        if ($inventario->setIdCatalogoProducto($rowProductos['id_catalogo_producto'])) {
            // Se verifica si existen registros (productos) para mostrar, de lo contrario se imprime un mensaje.
            if ($dataProductos = $inventario->selectInventarioProductosSeparados()) {
                // Se establece un color de relleno para los encabezados.
                $pdf->SetFillColor2(249, 181, 194);
                // Se establece la fuente para los encabezados.
                $pdf->SetFont('Times', 'B', 11);
                // Se imprimen las celdas con los encabezados.
                $pdf->Cell(50, 10, utf8_decode('Producto'), 1, 0, 'C', 1);
                $pdf->Cell(36, 10, utf8_decode('Cantidad adquirida'), 1, 0, 'C', 1);
                $pdf->Cell(50, 10, utf8_decode('Fecha de ingreso'), 1, 0, 'C', 1);
                $pdf->Cell(50, 10, utf8_decode('Precio adquirido(US$)'), 1, 1, 'C', 1);
                // Se establece la fuente para los datos de los productos.
                $pdf->SetFont('Times', '', 11);
                // Se recorren los registros ($dataProductos) fila por fila ($rowProducto).
                foreach ($dataProductos as $rowProductos) {
                    // Se imprimen las celdas con los datos de los productos.
                    $pdf->Cell(50, 10, utf8_decode($rowProductos['catalogo_producto']), 1, 0, 'C');
                    $pdf->Cell(36, 10, utf8_decode($rowProductos['cantidad_adquirida']), 1, 0, 'C');
                    $pdf->Cell(50, 10, utf8_decode($rowProductos['fecha_registro']), 1, 0, 'C');
                    $pdf->Cell(50, 10, $rowProductos['precio_adquirido'], 1, 1, 'C');
                }
            } else {
                $pdf->Cell(0, 10, utf8_decode('No hay productos para esta categoría'), 1, 1);
            }
        } else {
            $pdf->Cell(0, 10, utf8_decode('Categoría incorrecta o inexistente'), 1, 1);
        }
    }
} else {
    $pdf->Cell(0, 10, utf8_decode('No hay categorías para mostrar'), 1, 1);
}

// Se envía el documento al navegador y se llama al método Footer()
$pdf->Output();
?>