// Constantes para establecer comunicación con la API
const API_PEDIDOS = '../../app/api/dashboard/pedidos.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_PEDIDOS);
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
                <th>Acciones</th>
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
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_orden_compra})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                    </td>
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
                <th>Acciones</th>
            </tr>
        `
        //Se agrega el contenido a la tabla mediante su id
        document.getElementById('tbody-rows-pedidos').innerHTML = content;
    }
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de buscar.
document.getElementById('search-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se llama a la función que realiza la búsqueda. Se encuentra en el archivo components.js
    searchRows(API_PEDIDOS, 'search-form');
});

//Evento ejecutado para preparar el form antes de actualizar
const openUpdateDialog = id => {
    //console.log(id)
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar estado'

    const data = new FormData();
    data.append('id_orden_compra', id)

    fetch(API_PEDIDOS + 'readOne', {
        method: 'post',
        body: data
    })
    .then( request => {
        if(request.ok) {
            //console.log(request.text())
            return request.json()
        } else {
            console.log(`${request.status}  ${request.statusText}`);
        }
    }).then(response => {
        //console.log(response)
        if(response.status) {
            document.getElementById('id_orden_compra').value = response.dataset.id_orden_compra
            document.getElementById('id_estado_orden').value = response.dataset.id_estado_orden
        } else {
            sweetAlert(2, response.exception, null);
        }
    }).catch( error => {
        console.error(error);
    })
}

// Función para manejar el evento de enviar el form
document.getElementById('save-form').addEventListener('submit', event => {
    //Se evita que se recargue la página
    event.preventDefault();
    //Se declara la variable para definir la action para la API
    let action = ''
    //Se comprueba que exista un id en el campo oculto
    if(document.getElementById('id_orden_compra').value) {
        action = 'update'
    } else {
        action = 'create'
    }
    saveRow(API_PEDIDOS, action, 'save-form', 'modal-form');
})