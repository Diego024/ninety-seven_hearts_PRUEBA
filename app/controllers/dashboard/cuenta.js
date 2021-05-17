const API = '../../app/api/dashboard/administradores.php?action=';

function logOut() {
    swal({
        title: 'Advertencia',
        text: '¿Quiere cerrar la sesión?',
        icon: 'warning',
        buttons: ['No', 'Sí'],
        closeOnClickOutside: false,
        closeOnEsc: false
    }).then(function (value) {
        // Se verifica si fue cliqueado el botón Sí para hacer la petición de cerrar sesión, de lo contrario se muestra un mensaje.
        if(value) {
            return (
                fetch(API + 'logOut', {
                    method: 'get'
                })
            )
        } else {
            sweetAlert(4, 'Puede continuar con la sesión', null);
        }
    }).then( request => {
        if (request.ok) {
            return request.json()
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).then( response => {
        // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
        if (response.status) {
            sweetAlert(1, response.message, 'Index.php');
        } else {
            sweetAlert(2, response.exception, null);
        }
    }).catch(function (error) {
        console.log(error);
    });
}