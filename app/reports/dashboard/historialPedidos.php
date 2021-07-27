<?php
require('../../helpers/report.php');
require('../../models/datos.php');

// Se instancia la clase para crear el reporte.
$pdf = new Report;
// Se inicia el reporte con el encabezado del documento.
$pdf->startReport('Pedidios por cliente');

// Se instancia el módelo Categorías para obtener los datos.
$pedidos = new Datos;
// Se verifica si existen registros (categorías) para mostrar, de lo contrario se imprime un mensaje.
if ($dataClientes = $pedidos->selectClientes()) {
    // Se recorren los registros ($dataCategorias) fila por fila ($rowCategoria).
    foreach ($dataClientes as $rowClientes) {
        // Se establece un color de relleno para mostrar el nombre de la categoría.
        $pdf->SetFillColor2(131, 38, 90);
        // Se establece la fuente para el nombre de la categoría.
        $pdf->SetFont('Times', 'B', 12);
        // Se imprime una celda con el nombre de la categoría.
        $pdf->Cell(0, 10, utf8_decode('Cliente: '.$rowClientes['id_cliente']), 1, 1, 'C', 1);
        // Se establece la categoría para obtener sus productos, de lo contrario se imprime un mensaje de error.
        if ($pedidos->setIdCliente($rowClientes['id_cliente'])) {
            // Se verifica si existen registros (productos) para mostrar, de lo contrario se imprime un mensaje.
            if ($dataPedidos = $pedidos->selectHistorialPorCliente()) {
                // Se establece un color de relleno para los encabezados.
                $pdf->SetFillColor2(249, 181, 194);
                // Se establece la fuente para los encabezados.
                $pdf->SetFont('Times', 'B', 11);
                // Se imprimen las celdas con los encabezados.
                $pdf->Cell(30, 10, utf8_decode('No. Orden'), 1, 0, 'C', 1);
                $pdf->Cell(55, 10, utf8_decode('Cliente'), 1, 0, 'C', 1);
                $pdf->Cell(35, 10, utf8_decode('Fecha'), 1, 0, 'C', 1);
                $pdf->Cell(30, 10, utf8_decode('Total (US$)'), 1, 0, 'C', 1);
                $pdf->Cell(36, 10, utf8_decode('Estado'), 1, 1, 'C', 1);
                // Se establece la fuente para los datos de los productos.
                $pdf->SetFont('Times', '', 11);
                // Se recorren los registros ($dataProductos) fila por fila ($rowProducto).
                foreach ($dataPedidos as $rowPedidos) {
                    // Se imprimen las celdas con los datos de los productos.
                    $pdf->Cell(30, 10, utf8_decode($rowPedidos['id_orden_compra']), 1, 0, 'C');
                    $pdf->Cell(55, 10, utf8_decode($rowPedidos['cliente']), 1, 0, 'C');
                    $pdf->Cell(35, 10, utf8_decode($rowPedidos['fecha_orden']), 1, 0, 'C');
                    $pdf->Cell(30, 10, utf8_decode($rowPedidos['total']), 1, 0, 'C');
                    $pdf->Cell(36, 10, $rowPedidos['estado_orden'], 1, 1, 'C');
                }
            } else {
                $pdf->Cell(0, 10, utf8_decode('Este clliente aún no ha realizado pedidos'), 1, 1);
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