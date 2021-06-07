// Constantes para establecer comunicación con la API
const API_INDEX = '../../app/api/public/index.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    readAllNovedades();
})

function readAllNovedades() {
    fetch(API_INDEX + 'readAll', {
        method: 'get'
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    let content = '';
                    // Se recorre el conjunto de registros devuelto por la API (dataset) fila por fila a través del objeto row.
                    response.dataset.map(function (row) {
                        // Se crean y concatenan los acordeones donde van las FAQ's.
                        content += `
                        <div class="col">
                            <div class="card text-center" style="width: 18rem; margin-top:20px;">
                                <img src="../../resources/imageFiles/dashboard/catalogo/${row.foto_producto}" class="card-img-top" alt="..." style="height: 18rem">
                                <div class="card-body">
                                    <h5 class="card-title">${row.catalogo_producto}</h5>
                                    <p class="card-text">${row.precio_venta}</p>
                                    <a href="Producto.php" class="btn btn-danger" id="btn_card">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                        `;
                    });
                    // Se agregan las tarjetas a la etiqueta div mediante su id para mostrar las categorías.
                    document.getElementById('novedades').innerHTML = content;
                } else {
                    // Se presenta un mensaje de error cuando no existen datos para mostrar.
                    // document.getElementById('title').innerHTML = `<i class="material-icons small">cloud_off</i><span class="red-text">${response.exception}</span>`;
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}