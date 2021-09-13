// Constantes para establecer comunicación con la API
const API_ADMINISTRADORES = '../../app/api/dashboard/administradores.php?action=';

//Función para controlar el envío del formulario
document.getElementById('save-form').addEventListener('submit', event => {
    //Se evita la recarga de la pagína al enviar el form
    event.preventDefault();
    //Se ejecuta la petición a la API
    fetch(API_ADMINISTRADORES + 'changePassword', {
        method: 'post',
        body: new FormData(document.getElementById('save-form'))
    })
    .then(request => {
        //Se verifica que la request se completó correctamente
        if (request.ok) {
            // console.log(request.text())
            return request.json()
        } else {
            console.log(`${request.status} ${request.statusText}`)
        }
    })
    .then(response => {
        //Se comprueba que el status de la request sea satisfactorio
        if (response.status) {
            document.getElementById('clave_actual').value = "";
            document.getElementById('nueva_clave').value = "";
            document.getElementById('confirmacion').value = "";
            sweetAlert(1, response.message, 'Home.php')
        } else {
            sweetAlert(2, response.exception, null)
        }
    }).catch(error => {
        console.log(error)
    })
})