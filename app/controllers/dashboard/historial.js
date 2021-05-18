// Constantes para establecer comunicación con la API
const API_HISTORIAL = '../../app/api/dashboard/historial.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_HISTORIAL);
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    $('#warning-message').empty();
    $('#tbody-rows').empty();
    let content = ''
    if (dataset == [].length) {
        //console.log(dataset)
        content += `<h4>No hay pedidos registrados</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Código</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Estado</th>
            </tr>
        `
        dataset.map(row => {
            content += `
                <tr>
                    <td>${row.id_orden_compra}</td>
                    <td>${row.cliente}</td>
                    <td>${row.fecha_orden}</td>
                    <td>${row.total}</td>
                    <td>${row.estado_orden}</td>
                </tr>
            `
        })
        content += `
            <tr>
                <th>Código</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Estado</th>
            </tr>
        `
        //Se agrega el contenido a la tabla mediante su id
        document.getElementById('tbody-rows-historial').innerHTML = content;
    }
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de buscar.
document.getElementById('search-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se llama a la función que realiza la búsqueda. Se encuentra en el archivo components.js
    searchRows(API_HISTORIAL, 'search-form');
});
