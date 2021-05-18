// Constantes para establecer comunicación con la API
const API_COMENTARIOS = '../../app/api/dashboard/comentarios.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_COMENTARIOS);
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    $('#warning-message').empty();
    $('#tbody-rows').empty();
    let content = ''
    if(dataset == [].length) {
        //console.log(dataset)
        content+=`<h4>No hay comentarios registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Valoración</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        `
        dataset.map( row => {
            content+= `
                <tr>
                    <td>${row.cliente}</td>
                    <td>${row.catalogo_producto}</td>
                    <td>${row.valoracion}</td>
                    <td>${row.estado_comentario}</td>
                    <td>${row.fecha_comentario}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_comentario})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_comentario})" title="Eliminar">
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
                <th>Cliente</th>
                <th>Producto</th>
                <th>Valoración</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            `
            //Se agrega el contenido a la tabla mediante su id
            document.getElementById('tbody-rows').innerHTML = content;
    }
}

const openUpdateDialog = id => {
    // console.log(id)
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar Comentario'

    const data = new FormData();
    data.append('id_comentario', id)

    fetch(API_COMENTARIOS + 'readOne', {
        method: 'post',
        body: data
    })
    .then( request => {
        if(request.ok) {
            // console.log(request.text())
            return request.json()
        } else {
            console.log(`${request.status}  ${request.statusText}`);
        }
    }).then(response => {
        if(response.status) {
            document.getElementById('id_comentario').value = response.dataset[0].id_comentario
            document.getElementById('cliente').value = response.dataset[0].cliente
            document.getElementById('catalogo_producto').value = response.dataset[0].catalogo_producto
            document.getElementById('valoracion').value = response.dataset[0].valoracion
            document.getElementById('comentario').value = response.dataset[0].comentario
            document.getElementById('fecha_comentario').value = response.dataset[0].fecha_comentario
            document.getElementById('id_estado_comentario').value = response.dataset[0].id_estado_comentario
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
    if(document.getElementById('id_comentario').value) {
        action = 'update'
    }
    saveRow(API_COMENTARIOS, action, 'save-form', 'modal-form');
})

// Función para confirmar que desea eliminar un registro
const openDeleteDialog = id => {
    //Se define un objeto con los datos del registro
    const data = new FormData()
    data.append('id_comentario', id)
    //Se llama la función para eliminar el registro
    confirmDelete(API_COMENTARIOS, data)
}