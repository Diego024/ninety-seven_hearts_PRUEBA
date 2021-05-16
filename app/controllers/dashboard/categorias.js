// Constante para establecer la ruta y parámetros de comunicación con la API.
const API_CATEGORIAS = '../../app/api/dashboard/categorias.php?action=';

// Método manejador de eventos que se ejecuta cuando el documento ha cargado.
document.addEventListener('DOMContentLoaded', () => {
    // Se llama a la función que obtiene los registros para llenar la tabla. Se encuentra en el archivo components.js
    readRows(API_CATEGORIAS);
});

// Función para llenar la tabla con los datos de los registros. Se manda a llamar en la función readRows().
const fillTable = dataset => {
    let content = ''
    if(dataset.length == 0) {
        //console.log(dataset)
        content+=`<h4>No hay categorías registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Imagen</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        `
        dataset.map( row => {
            content+= `
                <tr>
                    <td><img src="../../resources/statics/imageFiles/categorias/${row.foto_categoria}" height="100" width="100"></td>
                    <td>${row.categoria}</td>
                    <td>${row.descripcion_categoria}</td> 
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_categoria})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_categoria})" title="Eliminar">
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
                <th>Imagen</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>            `
            //Se agrega el contenido a la tabla mediante su id
            document.getElementById('tbody-categorias').innerHTML = content;
    }
}

//Evento ejecutado para preparar el form antes de hacer un insert
const openCreateDialog = () => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#Form-categorias').modal('show');
    //Asignamos el titulo al modal
    document.getElementById('modal-title').textContent = 'Registrar Categoría'
}

const openUpdateDialog = id => {
    console.log(id)
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    $('#Form-categorias').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar Categoría'

    const data = new FormData();
    data.append('id_categoria', id)

    fetch(API_CATEGORIAS + 'readOne', {
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
        if(response.status) {
            document.getElementById('id_categoria').value = response.dataset[0].id_categoria
            document.getElementById('categoria').value = response.dataset[0].categoria
            document.getElementById('descripcion_categoria').value = response.dataset[0].descripcion_categoria
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
    if(document.getElementById('id_categoria').value) {
        action = 'update'
    } else {
        action = 'create'
    }
    saveRow(API_CATEGORIAS, action, 'save-form', 'modal-form');
    $('#Form-categorias').modal('hide');
})

// Función para establecer el registro a eliminar y abrir una caja de dialogo de confirmación.
function openDeleteDialog(id) {
    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_categoria', id);
    // Se llama a la función que elimina un registro. Se encuentra en el archivo components.js
    confirmDelete(API_CATEGORIAS, data);
}