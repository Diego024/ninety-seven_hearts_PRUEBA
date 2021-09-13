const API_ADMINISTRADORES = '../../app/api/dashboard/administradores.php?action=';

document.addEventListener('DOMContentLoaded', () => {
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
    //Se llama a la función para obtener el historial
    getRecords(API_ADMINISTRADORES);
})

//Función para ejecutar la peticion a la API
const getRecords = api => {
    fetch(api + 'getRecords', {
        method: 'get',
    })
    .then(request => {
        if (request.ok) {
            // console.log(request.text())
            return request.json()
        } else {

            console.log(`${request.status} ${request.statusText}`);
        }
    })
    .then(response => {
        let data = []
        //Se comprueba que el status de la request sea satisfactorio
        if (response.status) {
            data = response.dataset;
        } else {
            sweetAlert(4, response.exception, null)
        }
        //Se envían los datos al controlador para que llene la tabla
        fillTable(data)
    })
    .catch(error => {
        console.log(error);
    })
}

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    $('#warning-message').empty();
    $('#tbody-rows').empty();
    let content = '';
    // console.log(dataset)
    if (dataset == [].length) {
        content += `<h4>No hay inicios de sesión registrados</h4>`
        document.getElementById('warning-message').innerHTML = content
    } else {
        //Se agregan los titulos de las columnas
        content += `
            <tr>
                <th>Administrador</th>
                <th>Código</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Sistema Operativo</th>
            </tr>
        `
        //Recorremos el arreglo de registros fila por fila, a travez del objeto row
        dataset.map(row => {
            //Se procesa la hora solo para mostrar la información adecuada
            let horaRegistro = row.hora.split('.')
            //Se crean y concatenan las filas de la tabla con los datos del registro
            content += `
                <tr>
                    <td>${row.usuario}</td>
                    <td>${row.id_administrador}</td>
                    <td>${row.fecha}</td>
                    <td>${horaRegistro[0]}</td>
                    <td>${row.sistema_info}</td>
                </tr>
            `;
        })

        content += `
            <tr>
                <th>Administrador</th>
                <th>Código</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Sistema Operativo</th>
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
    searchRecord(API_ADMINISTRADORES, 'search-form');
});

//Función para realizar la petición de la busqueda a la API
function searchRecord(api, form) {
    fetch(api + 'searchRecord', {
        method: 'post',
        body: new FormData(document.getElementById(form))
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            // console.log(request.text())
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    // Se envían los datos a la función del controlador para que llene la tabla en la vista.
                    fillTable(response.dataset);
                    sweetAlert(1, response.message, null);
                } else {
                    sweetAlert(2, response.exception, null);
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}