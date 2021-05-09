// Este archivo es de uso general en todas las páginas web. Se importa en las plantillas del pie del documento.

// Función para listar los registros de una tabla
const readRows = api => {
    fetch(api + 'readAll', {
        method: "get",
    })
    .then( request => {
        if(request.ok) {
            return request.json()
        } else {
            console.log(`${request.status} ${request.statusText}`);
        }
        
    })
    .then( response => {
        let data = []
        //Se comprueba que el status de la request sea satisfactorio
        if(response.status) {
            data = response.dataset;
        } else {
            sweetAlert(4, response.exception, null)
        }
        //Se envían los datos al controlador para que llene la tabla
        fillTable(data)
    })
    .catch( error => {
        console.log(error);
    })
}

//Funciones para crear o actualizar un registro.
const saveRow = (api, action, form, modal)  => {
    fetch(api + action , {
        method: 'post',
        body: new FormData(document.getElementById(form))
    })
    .then( request => {
        //Se verifica que la request se completó correctamente
        if(request.ok) {
            //Error
            return request.json()
        } else {
            console.log(`${request.status} ${request.statusText}`)
        }
    })
    .then( response => {
        //Se comprueba que el status de la request sea satisfactorio
        if(response.status) {
            //Se cerraría el modal del form automáticamente
            $(modal).modal('hide');
            readRows(api)
            sweetAlert(1, response.message, null)
        } else {
            sweetAlert(2, response.exception, null)
        }
    }).catch( error => {
        console.log(error)
    })
}

// Función para confirmar que desea eliminar un registro
// const confirmDelete = (api, data) => {
//     swal({
//         title: 'Advertencia',
//         text: '¿Desea eliminar el registro?',
//         icon: 'warning',
//         buttons: ['No', 'Sí'],
//         closeOnClickOutside: false,
//         closeonEsc: false,
//     }).then( value => {
//         if(value) {
//             return ( 
//                 fetch(api + 'delete', {
//                 method: 'post',
//                 body: data
//                 }) 
//             )
//         }
//     }).then( request => {
//         //Verificando que la request sea correcta
//         if(request.ok) {
//             return request.json()
//         } else {
//             console.log(`${request.status} ${request.statusText}`)
//         }
//     })
//     .then( response => {
//         //Se comprueba que el status de la request sea satisfactorio
//         if(response.status) {
//             //Se recarga la vista de los registros en la tabla
//             readRows(api);
//             sweetAlert(1, response.message, null);
//         } else {
//             sweetAlert(2, response.exception, null);
//         }
//     }).catch(error => {
//         console.log(error)
//     })
// }


//Funcion para manejar los mensajes de notificación


function confirmDelete(api, data) {
    swal({
        title: 'Advertencia',
        text: '¿Desea eliminar el registro?',
        icon: 'warning',
        buttons: ['No', 'Sí'],
        closeOnClickOutside: false,
        closeOnEsc: false
    }).then(function (value) {
        // Se verifica si fue cliqueado el botón Sí para hacer la petición de borrado, de lo contrario no se hace nada.
        if (value) {
            fetch(api + 'delete', {
                method: 'post',
                body: data
            }).then(request => {
                // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
                if (request.ok) {
                    console.log(request.text())
                    return request.json();
                } else {
                    console.log(request.status + ' ' + request.statusText);
                }
            }).then(response => {
                if (response.status) {
                    readRows(api);
                    sweetAlert(1, response.message, null);
                } else {
                    sweetAlert(2, response.exception, null);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    });
}

const sweetAlert = (type, text, url) => {
    switch (type) {
        case 1:
            title = 'Éxito'
            icon = 'success'
            break;
        case 2:
            title = 'Error'
            icon = 'error'
            break;
        case 3:
            title = 'Advertencia'
            icon = 'warning'
            break;
        case 4:
            title = 'Aviso'
            icon = 'info'
            break;
    }
    // Se verifica si existe una url, de ser así, se controla
    if(url) {
        swal({
            title,
            text,
            icon,
            button: 'Aceptar',
            closeOnClickOutside: false,
            closeOnEsc: false
        })
        .then( () => {
            location.href = url
        })
    } else {
        swal({
            title,
            text,
            icon,
            button: 'Aceptar',
            closeOnClickOutside: false,
            closeOnEsc: false
        })
    }
}

// Función para cargar las opciones en un select de formulario.
const fillSelect = (endpoint, select, selected) => {
    fetch(endpoint)
    .then( request => {
        if(request.ok) {
            return request.json()
        } else {
            console.log(`${request.status} ${request.statusText}`)
        }
    }).then( response => {
        let content = ''
        //Se verifica que la request se completó correctamente
        if(response.status) {
            if(!selected) {
                content+= '<option disabled selected>Selecione una opción</option>'
            }
            //Se recorre el dataset del response
            response.dataset.map( row => {
                //Se obtiene el valor del primer campo del script
                values = Object.values(row)[0]
                //Se obtiene el valor del segundo campo del script
                text = Object.values(row)[1];
                // Se verifica si el valor de la API es diferente al valor seleccionado para enlistar una opción, de lo contrario se establece la opción como seleccionada.
                if (value != selected) {
                    content += `<option value="${value}">${text}</option>`
                } else {
                    content += `<option value="${value}" selected>${text}</option>`
                }
            })
        } else {
            content += '<option>No hay opciones disponibles</option>';
        }
        //Se agregan las opciones a la etiqueta select mediante su id
        document.getElementById(select).innerHTML = content

    }).catch( error => {
        console.log(error)
    })
}