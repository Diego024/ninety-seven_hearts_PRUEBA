// Constantes para establecer comunicación con la API
const API_CLIENTES = '../../app/api/dashboard/clientes.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_CLIENTES);
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
        content += `<h4>No hay clientes registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        `
        dataset.map(row => {
            content += `
                <tr>
                    <td>${row.id_cliente}</td>
                    <td>${row.nombres}</td>
                    <td>${row.apellidos}</td>
                    <td>${row.telefono}</td>
                    <td>${row.correo_electronico}</td>
                    <td>${row.estado_cuenta}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_cliente})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_cliente})" title="Eliminar">
                            <span class="material-icons red" data-tooltip="Eliminar">   
                                delete
                            </span>
                        </a>
                    </td>
                </tr>
            `
        })
        content += `
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        `
        //Se agrega el contenido a la tabla mediante su id
        document.getElementById('tbody-rows').innerHTML = content;
    }
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de buscar.
document.getElementById('search-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se llama a la función que realiza la búsqueda. Se encuentra en el archivo components.js
    searchRows(API_CLIENTES, 'search-form');
});

const toggleDisableAtributtes = state => {
    document.getElementById('clave').disabled = state;
    document.getElementById('confirmar_clave').disabled = state;
}

//Evento ejecutado para preparar el form antes de hacer un insert
const openCreateDialog = () => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    //Asignamos el titulo al modal
    document.getElementById('modal-title').textContent = 'Registrar Cliente'
    //Se habilitan los campos de contraseña
    toggleDisableAtributtes(false);
}

const openUpdateDialog = id => {
    //console.log(id)
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar Cliente'
    //Se deshabilitan los campos de contraseña
    toggleDisableAtributtes(true);

    const data = new FormData();
    data.append('id_cliente', id)

    fetch(API_CLIENTES + 'readOne', {
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
        // console.log(response)
        if(response.status) {
            document.getElementById('id_cliente').value = response.dataset[0].id_cliente
            document.getElementById('nombres').value = response.dataset[0].nombres
            document.getElementById('apellidos').value = response.dataset[0].apellidos
            document.getElementById('fecha_nacimiento').value = response.dataset[0].fecha_nacimiento
            document.getElementById('telefono').value = response.dataset[0].telefono
            document.getElementById('direccion').value = response.dataset[0].direccion
            document.getElementById('correo_electronico').value = response.dataset[0].correo_electronico
            document.getElementById('clave').value = response.dataset[0].clave
            document.getElementById('id_estado_cuenta').value = response.dataset[0].id_estado_cuenta
            document.getElementById('id_genero').value = response.dataset[0].id_genero
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
    if(document.getElementById('id_cliente').value) {
        action = 'update'
    } else {
        action = 'create'
    }
    saveRow(API_CLIENTES, action, 'save-form', 'modal-form');
})

// Función para confirmar que desea eliminar un registro
const openDeleteDialog = id => {
    //Se define un objeto con los datos del registro
    const data = new FormData()
    data.append('id_cliente', id)
    //Se llama la función para eliminar el registro
    confirmDelete(API_CLIENTES, data)
}