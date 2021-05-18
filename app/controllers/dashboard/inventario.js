// Constantes para establecer comunicación con la API
const API_INVENTARIO = '../../app/api/dashboard/inventario.php?action=';
const API_CATALOGO = '../../app/api/dashboard/catalogo.php?action=readAll';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readRows(API_INVENTARIO);
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    $('#warning-message').empty();
    $('#tbody-rows').empty();
    let content = ''
    if (dataset == [].length) {
        //console.log(dataset)
        content += `<h4>No hay registros</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Cantidad adquirida</th>
                <th>Fecha</th>
                <th>Precio adquirido</th>
                <th>Acciones</th>
            </tr>
        `
        dataset.map(row => {
            content += `
                <tr>
                    <td>${row.id_inventario_producto}</td>
                    <td>${row.catalogo_producto }</td>
                    <td>${row.cantidad_adquirida}</td>
                    <td>${row.fecha_registro}</td>
                    <td>${row.precio_adquirido}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_inventario_producto})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_inventario_producto})" title="Eliminar">
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
                <th>Producto</th>
                <th>Cantidad adquirida</th>
                <th>Fecha</th>
                <th>Precio adquirido</th>
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
    searchRows(API_INVENTARIO, 'search-form');
});

const openCreateDialog = () => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    //Asignamos el titulo al modal
    document.getElementById('modal-title').textContent = 'Ingresar registro'
    // Se llama a la function para llevar el Select
    fillSelect(API_CATALOGO, 'id_catalogo_producto', null);
}

const openUpdateDialog = id => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar registro'

    //Se crea una constante con los datos del registro
    const data = new FormData();
    data.append('id_inventario_producto', id);

    //Se realiza la request a la API
    fetch(API_INVENTARIO + 'readOne', {
        method: 'post',
        body: data,
    }) 
    .then( request  => {
        //Verificamos que la peticion se completó correctamente
        if( request.ok) {
            // console.log(request.text())
            return request.json()
        } else {
            console.log(`${request.status}  ${request.statusText}`);
        }
    })
    .then( response => {
        //Se comprueba si la request es satisfactoria
        if(response.status) {
            document.getElementById('id_inventario_producto').value = response.dataset[0].id_inventario_producto;
            //document.getElementById('catalogo_producto').value = response.dataset[0].catalogo_producto;
            fillSelect(API_CATALOGO, 'id_catalogo_producto', response.dataset[0].id_catalogo_producto);
            document.getElementById('cantidad').value = response.dataset[0].cantidad_adquirida;
            document.getElementById('fecha_registro').value = response.dataset[0].fecha_registro;
            document.getElementById('precio_adquirido').value = response.dataset[0].precio_adquirido;
            
        } else {
            sweetAlert(2, response.exception, null);
        }        
    })
    .catch(function (error) {
        console.log(error);
    });
}

//Función para controlar el envío del formulario
document.getElementById('save-form').addEventListener('submit', event => {
    //Se evita la recarga de la pagína al enviar el form
    event.preventDefault();
    //Se define una variable para establecer la acción a realizar en la API
    let action = '';
    //Se comprueba si existe un id ingresado en el formulario
    if(document.getElementById('id_inventario_producto').value) {
        action = 'update';
    } else {
        action = 'create';
    }
    //console.log(action)
    saveRow(API_INVENTARIO, action, 'save-form', 'modal-form');
})

//Función para establecer el registro que desea eliminar
const openDeleteDialog = id => {
    //Se define un objeto con los datos del registro seleccionado
    const data = new FormData();
    data.append('id_inventario_producto', id);
    //Se llama a la función para confimar que desea eliminar el registro
    confirmDelete(API_INVENTARIO, data);
}