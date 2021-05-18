// Constantes para establecer comunicación con la API
const API_CATALOGO = '../../app/api/dashboard/catalogo.php?action=';
// Variable para indicar qué tabla se llenará
let isOtherTable = false;

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    // //Se llama a la función para llenar la tabla
    readRows(API_CATALOGO)
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
})

// Función para llenar la tabla con los datos de los registros. Se usa en la función readRows()
const fillTable = dataset => {
    if(isOtherTable) {

    } else {
        $('#lowStock-warning').empty();
        $('#lowStock-rows').empty();
        let content = '';
        // console.log(dataset)
        if(dataset == [].length) {
            content+=`<h4>No hay productos con poca existencia</h4>`
            document.getElementById('lowStock-warning').innerHTML = content
        } else {
            //Se agregan los titulos de las columnas
            content += `
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Existencia</th>
                </tr>
            `
            //Recorremos el arreglo de registros fila por fila, a travez del objeto row
            dataset.map( row => {
                //Se crean y concatenan las filas de la tabla con los datos del registro
                content += `
                    <tr>
                        <td>${row.id_catalogo_producto}</td>
                        <td>${row.catalogo_producto}</td>
                        <td>${row.categoria}</td>
                        <td>${row.existencia}</td>
                    </tr>
                `;  
            })

            content+=`
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Existencia</th>
                </tr>
            `
            //Se agrega el contenido a la tabla mediante su id
            document.getElementById('lowStock-rows').innerHTML = content;
            
            //Se indica que la próxima vez en ejecutar el fillTable, llenará la otra tabla
            isOtherTable = true;
        }

    }
    
}