const API_CATALOGO = '../../app/api/dashboard/catalogo.php?action=';
const API_CATEGORIAS = '../../app/api/dashboard/categorias.php?action=readAll';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    //Se llama a la función para llenar la tabla
    readRows(API_CATALOGO);
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
})

const fillTable = dataset => {
    $('#warning-message').empty();
    $('#tbody-rows').empty();
    let content = '';
    // console.log(dataset)
    if(dataset == [].length) {
        content+=`<h4>No hay productos registradas</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Foto</th>
                <th>Producto</th>
                <th>Existencia</th>
                <th>Precio de venta</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        `
        //Recorremos el arreglo de registros fila por fila, a travez del objeto row
        dataset.map(row => {
            content += `
                <tr>
                    <td><img src="../../resources/imageFiles/dashboard/catalogo/${row.foto_producto}" class="img-fluid"></td>
                    <td>${row.catalogo_producto}</td>
                    <td>${row.existencia}</td>
                    <td>${row.precio_venta}</td>
                    <td>${row.categoria}</td>
                    <td class="icons">
                        <a onclick="openUpdateDialog(${row.id_catalogo_producto})" data-toggle="tooltip" data-placement="bottom" title="Editar">
                            <span class="material-icons blue" data-tooltip="Actualizar">
                                edit
                            </span>
                        </a>
                        <a onclick="openDeleteDialog(${row.id_catalogo_producto})" title="Eliminar">
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
                <th>Foto</th>
                <th>Producto</th>
                <th>Existencia</th>
                <th>Precio de venta</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        `
        //Se agrega el contenido a la tabla mediante su id
        document.getElementById('tbody-rows').innerHTML = content;
        //Se debería ver todos los registros
    }
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de buscar.
document.getElementById('search-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se llama a la función que realiza la búsqueda. Se encuentra en el archivo components.js
    searchRows(API_CATALOGO, 'search-form');
});

const openCreateDialog = () => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    //Asignamos el titulo al modal
    document.getElementById('modal-title').textContent = 'Registrar Producto'
    // Se establece el campo de archivo como obligatorio.
    document.getElementById('foto_producto').required = true;
    // Se llama a la function para llevar el Select
    fillSelect(API_CATEGORIAS, 'id_categoria', null);
}

const openUpdateDialog = id => {
    //Se restauran los elementos del form
    document.getElementById('save-form').reset();
    //Se abre el form
    $('#modal-form').modal('show');
    document.getElementById('modal-title').textContent = 'Actualizar producto'
    // Se establece el campo de archivo como opcional.
    document.getElementById('foto_producto').required = false;

    //Se crea una constante con los datos del registro
    const data = new FormData();
    data.append('id_catalogo_producto', id);

    //Se realiza la request a la API
    fetch(API_CATALOGO + 'readOne', {
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
            document.getElementById('id_catalogo_producto').value = response.dataset[0].id_catalogo_producto;
            document.getElementById('catalogo_producto').value = response.dataset[0].catalogo_producto;
            document.getElementById('descripcion').value = response.dataset[0].descripcion;
            document.getElementById('existencia').value = response.dataset[0].existencia;
            document.getElementById('precio_venta').value = response.dataset[0].precio_venta;
            fillSelect(API_CATEGORIAS, 'id_categoria', response.dataset[0].id_categoria);
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
    if(document.getElementById('id_catalogo_producto').value) {
        action = 'update';
    } else {
        action = 'create';
    }
    // console.log(action)
    saveRow(API_CATALOGO, action, 'save-form', 'modal-form');
})

//Función para establecer el registro que desea eliminar
const openDeleteDialog = id => {
    //Se define un objeto con los datos del registro seleccionado
    const data = new FormData();
    data.append('id_catalogo_producto', id);
    //Se llama a la función para confimar que desea eliminar el registro
    confirmDelete(API_CATALOGO, data);
}