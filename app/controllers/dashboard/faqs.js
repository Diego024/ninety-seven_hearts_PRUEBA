// Constantes para establecer comunicación con la API
const API_FAQS = '../../app/api/dashboard/faqs.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_FAQS);
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    let content = ''
    if(dataset.lenght == 0) {
        //console.log(dataset)
        content+=`<h4>No hay FAQs registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Código</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Acciones</th>
            </tr>
        `
        dataset.map( row => {
            content+= `
                <tr>
                    <td>${row.id_faq}</td>
                    <td>${row.pregunta}</td>
                    <td>${row.respuesta}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_faq})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_faq})" title="Eliminar">
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
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Acciones</th>
                </tr>
            `
            //Se agrega el contenido a la tabla mediante su id
            document.getElementById('tbody-rows').innerHTML = content;
    }
}

//Evento ejecutado para preparar el form antes de hacer un insert
const openCreateDialog = () => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    //Asignamos el titulo al modal
    document.getElementById('modal-title').textContent = 'Registrar Pregunta Frecuente'
}

const openUpdateDialog = id => {
    console.log(id)
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar Pregunta Frecuente'

    const data = new FormData();
    data.append('id_faq', id)

    fetch(API_FAQS + 'readOne', {
        method: 'post',
        body: data
    })
    .then( request => {
        if(request.ok) {
            return request.json()
        } else {
            console.log(`${request.status}  ${request.statusText}`);
        }
    }).then(response => {
        if(response.status) {
            document.getElementById('id_faq').value = response.dataset[0].id_faq
            document.getElementById('pregunta').value = response.dataset[0].pregunta
            document.getElementById('respuesta').value = response.dataset[0].respuesta
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
    if(document.getElementById('id_faq').value) {
        action = 'update'
    } else {
        action = 'create'
    }
    saveRow(API_FAQS, action, 'save-form', 'modal-form');
    $('#modal-form').modal('hide');
})

// Función para establecer el registro a eliminar y abrir una caja de dialogo de confirmación.
function openDeleteDialog(id) {
    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_faq', id);
    // Se llama a la función que elimina un registro. Se encuentra en el archivo components.js
    confirmDelete(API_FAQS, data);
}