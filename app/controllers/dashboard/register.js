const API_ADMINISTRADORES = '../../app/api/dashboard/administradores.php?action=';

// Función para manejar el evento de enviar el form
document.getElementById('save-form').addEventListener('submit', event => {
    //Se evita que se recargue la página
    event.preventDefault();
    //Se ejecuta la request a la API
    createAdmin();
})

const createAdmin = () => {
    fetch(API_ADMINISTRADORES + 'create', {
        method: 'post',
        body: new FormData(document.getElementById('save-form'))
    }).then( request => {
        if(request.ok) {
            return request.json();
        } else {
            console.log(`${request.status} ${request.statusText}`)
        }
    }).then( response => {
        //Se comprueba que el status de la request sea satisfactorio
        if(response.status) {
            sweetAlert(1, response.message, 'Home.php')
        } else {
            sweetAlert(2, response.exception, null)
        }
    }).catch( error => {
        console.log(error)
    })
}