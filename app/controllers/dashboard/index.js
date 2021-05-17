// Constantes para establecer comunicación con la API
const API_ADMINISTRADORES = '../../app/api/dashboard/administradores.php?action=';

document.addEventListener('DOMContentLoaded', () => {
    //Request para verificar que existan usuarios
    fetch(API_ADMINISTRADORES + 'readAll')
    .then(request => {
        if(request.ok) {
            // console.log(request.text())
            return request.json()
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).then(response => {
        if(response.status) {
            sweetAlert(4, 'Autentíquese para ingresar')
        } else {
            // Se verifica si ocurrió un problema en la base de datos, de lo contrario se continua normalmente.
            if (response.error) {
                sweetAlert(2, response.exception, null);
            } else {
                sweetAlert(3, response.exception, 'register.php');
            }
        }
    }).catch(function (error) {
        console.log(error);
    });
})

document.getElementById('session-form').addEventListener('submit', event => {
    //Se evita la recarga de la página
    event.preventDefault();

    fetch(API_ADMINISTRADORES + 'logIn', {
        method: 'post',
        body: new FormData(document.getElementById('session-form'))
    }).then( request => {
        if(request.ok) {
            // console.log(request.text())
            return request.json()
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).then(response => {
        if(response.status) {
            sweetAlert(1, response.message, 'Home.php');
        } else {
            sweetAlert(2, response.exception, null);
        }
    }).catch(function (error) {
        console.log(error);
    });
})