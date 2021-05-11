// Constantes para establecer comunicación con la API
const API_ADMINISTRADORES = '../../app/api/dashboard/administradores.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    //Se llama a la función para llenar la tabla
    readRows(API_ADMINISTRADORES)
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    let content = '';
    if(dataset.lenght == 0) {
        content+=`<h4>No hay Administradores registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        console.log(dataset)
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        `
        //Recorremos el arreglo de registros fila por fila, a travez del objeto row
        dataset.map( row => {
            //Se crean y concatenan las filas de la tabla con los datos del registro
            content += `
                <tr>
                    <td>${row.id_administrador}</td>
                    <td>${row.nombres}</td>
                    <td>${row.apellidos}</td>
                    <td>${row.usuario}</td>
                    <td>${row.estado_cuenta}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_administrador})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_administrador})" title="Eliminar">
                            <span class="material-icons red" data-tooltip="Eliminar">   
                                delete
                            </span>
                        </a>
                    </td>
                </tr>
            `;  
        })

        content+=`
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        `
        //Se agrega el contenido a la tabla mediante su id
        document.getElementById('tbody-rows').innerHTML = content;
        //Se debería ver todos los registros
    }
    
}

const toggleDisableAtributtes = state => {
    document.getElementById('usuario').disabled = state;
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
    document.getElementById('modal-title').textContent = 'Registrar administrador'
    //Se habilitan los campos de alias y contraseña
    toggleDisableAtributtes(false);
}

const openUpdateDialog = id => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar administrador'
    //Se deshabilitan los campos de alias y contraseña
    toggleDisableAtributtes(true);

    //Se define un objeto con los datos del registro seleccionado
    const data = new FormData();
    data.append('id_administrador', id)

    fetch(API_ADMINISTRADORES + 'readOne', {
        method: 'post',
        body: data
    })
    .then( request => {
        //Verificamos que la peticion se completó correctamente
        if( request.ok) {
            return request.json()
        } else {
            console.log(`${request.status}  ${request.statusText}`);
        }
    }).then( response => {
        //Se comprueba si la request es satisfactoria
        if(response.status) {
            document.getElementById('id_administrador').value = response.dataset[0].id_administrador
            document.getElementById('nombres').value = response.dataset[0].nombres
            document.getElementById('apellidos').value = response.dataset[0].apellidos
            document.getElementById('usuario').value = response.dataset[0].usuario
            document.getElementById('correo_electronico').value = response.dataset[0].correo_electronico
            document.getElementById('clave').value = response.dataset[0].clave
            document.getElementById('confirmar_clave').value = response.dataset[0].clave
            document.getElementById('telefono').value = response.dataset[0].telefono
            document.getElementById('genero').selected = response.dataset[0].genero
            document.getElementById('estado_cuenta').selected = response.dataset[0].estado_cuenta
            // document.getElementById('fecha_nacimiento').value = response.dataset[0].fecha_nacimiento
            document.getElementById('direccion').value = response.dataset[0].direccion
            
        } else {
            sweetAlert(2, response.exception, null);
        }
    }).catch( error => {
        console.log(error)
    })
}

// Función para manejar el evento de enviar el form
document.getElementById('save-form').addEventListener('submit', event => {
    //Se evita que se recargue la página
    event.preventDefault();
    //Se declara la variable para definir la action para la API
    let action = ''
    //Se comprueba que exista un id en el campo oculto
    if(document.getElementById('id_administrador').value) {
        action = 'update'
    } else {
        action = 'create'
    }
    saveRow(API_ADMINISTRADORES, action, 'save-form', 'modal-form');
})

// Función para confirmar que desea eliminar un registro
const openDeleteDialog = id => {
    //Se define un objeto con los datos del registro
    const data = new FormData()
    data.append('id_administrador', id)
    //Se llama la función para eliminar el registro
    confirmDelete(API_ADMINISTRADORES, data)
}