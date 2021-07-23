<?php
require('../../helpers/report.php');
require('../../models/catalogo.php');

// Se instancia la clase para crear el reporte.
$pdf = new Report;
// Se inicia el reporte con el encabezado del documento.
$pdf->startReport('Productos por categoría');

// Se instancia el módelo Categorías para obtener los datos.
$catalogo = new Catalogo;
// Se verifica si existen registros (categorías) para mostrar, de lo contrario se imprime un mensaje.
if ($dataCatalogo = $catalogo->SelectCategoria()) {
    // Se recorren los registros ($dataCategorias) fila por fila ($rowCategoria).
    foreach ($dataCatalogo as $rowCategoria) {
        // Se establece un color de relleno para mostrar el nombre de la categoría.
        $pdf->SetFillColor2(131, 38, 90);
        // Se establece la fuente para el nombre de la categoría.
        $pdf->SetFont('Times', 'B', 12);
        // Se imprime una celda con el nombre de la categoría.
        $pdf->Cell(0, 10, utf8_decode('Categoría: '.$rowCategoria['categoria']), 1, 1, 'C', 1);
        // Se establece la categoría para obtener sus productos, de lo contrario se imprime un mensaje de error.
        if ($catalogo->setIdCategoria($rowCategoria['id_categoria'])) {
            // Se verifica si existen registros (productos) para mostrar, de lo contrario se imprime un mensaje.
            if ($dataProductos = $catalogo->selectProductosPorCategoria()) {
                // Se establece un color de relleno para los encabezados.
                $pdf->SetFillColor2(249, 181, 194);
                // Se establece la fuente para los encabezados.
                $pdf->SetFont('Times', 'B', 11);
                // Se imprimen las celdas con los encabezados.
                $pdf->Cell(140, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
                $pdf->Cell(46, 10, utf8_decode('Precio (US$)'), 1, 1, 'C', 1);
                // Se establece la fuente para los datos de los productos.
                $pdf->SetFont('Times', '', 11);
                // Se recorren los registros ($dataProductos) fila por fila ($rowProducto).
                foreach ($dataProductos as $rowProductos) {
                    // Se imprimen las celdas con los datos de los productos.
                    $pdf->Cell(140, 10, utf8_decode($rowProductos['catalogo_producto']), 1, 0, 'C');
                    $pdf->Cell(46, 10, $rowProductos['precio_venta'], 1, 1, 'C');
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