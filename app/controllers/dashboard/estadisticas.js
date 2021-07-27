//Declaramos la constante para hacer peticiones a la API de Pedidos
const API_PEDIDOS = '../../app/api/dashboard/pedidos.php?action=';
const API_CATALOGO = '../../app/api/dashboard/catalogo.php?action=';
const API_CATEGORIAS = '../../app/api/dashboard/categorias.php?action=';

// Función manejadora de eventos, para ejecutar justo cuando termine de cardar.
document.addEventListener('DOMContentLoaded', () => {
    //Se llama a la función para poner la foto del admin
    setInfoAdmin();
    //Se llaman a las funciones para dibujar los gráficos
    graficoLineasVentasMensuales()
    graficoBarrasProductoMasVendido()
    graficoBarrasCategoriaMasVendida()
    graficoDonaUsuariosQueMasCompran()
    graficoPastelCategoriasCatalogo()
})

const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Séptiembre', 'Octubre', 'Noviembre', 'Diciembre'];

//Función para mostrar las ventas mensuales
const graficoLineasVentasMensuales = () => {
    //Se realiza la petición a la API
    fetch(API_PEDIDOS + 'getVentasMensuales')
    .then( request => {
        if(request.ok){
            //Se convierte la respuesta de la API a formato JSON
            return request.json();
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    })
    .then( response => {
        //Se evalua que la respuesta sea correcta
        if(response.status) {
            //Se declaran los arreglos que almacenarán la información
            let meses = [];
            let venta = [];
            //Se recorren los datos de la API
            response.dataset.map( row => {
                //Se almacenan los valores
                meses.push(months[row.mes]);
                venta.push(row.sum);
            })
            //Se ejecuta la función que dibujará el gráfico
            lineGraph('ventasMensuales', meses, venta, 'Ventas mensuales', 'Ventas realizas por cada mes');
        }else {
            document.getElementById('ventasMensuales').remove();
            console.log(response.exception);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}

//Función para mostrar las ventas mensuales
const graficoBarrasProductoMasVendido = () => {
    //Se realiza la petición a la API
    fetch(API_CATALOGO + 'getMasVendidos')
    .then( request => {
        if(request.ok){
            //Se convierte la respuesta de la API a formato JSON
            return request.json();
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    })
    .then( response => {
        //Se evalua que la respuesta sea correcta
        if(response.status) {
            //Se declaran los arreglos que almacenarán la información
            let producto = [];
            let cantidad = [];
            //Se recorren los datos de la API
            response.dataset.map( row => {
                //Se almacenan los valores
                producto.push(row.catalogo_producto);
                cantidad.push(row.sum);
            })
            //Se ejecuta la función que dibujará el gráfico
            barGraph('productosMasVendidos', producto, cantidad, 'Productos vendidos', 'Los 10 productos más vendidos');
        }else {
            document.getElementById('productosMasVendidos').remove();
            console.log(response.exception);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}

//Función para mostrar las categorías que más se han vendido
const graficoBarrasCategoriaMasVendida = () => {
    //Se realiza la petición a la API
    fetch(API_CATEGORIAS + 'getCategoriasMasVendidas')
    .then( request => {
        if(request.ok){
            //Se convierte la respuesta de la API a formato JSON
            return request.json();
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    })
    .then( response => {
        //Se evalua que la respuesta sea correcta
        if(response.status) {
            //Se declaran los arreglos que almacenarán la información
            let categoria = [];
            let cantidad = [];
            //Se recorren los datos de la API
            response.dataset.map( row => {
                //Se almacenan los valores
                categoria.push(row.categoria);
                cantidad.push(row.sum);
            })
            //Se ejecuta la función que dibujará el gráfico
            barGraph('categoriasMasVendidas', categoria, cantidad, 'Productos vendidos', 'Los 10 categorías más vendidos');
        }else {
            document.getElementById('categoriasMasVendidas').remove();
            console.log(response.exception);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}

//Función para mostrar los usuarios que han realizado más pedidos
const graficoDonaUsuariosQueMasCompran = () => {
    //Se realiza la petición a la API
    fetch(API_CATALOGO + 'getUsuariosMasCompran')
    .then( request => {
        if(request.ok){
            //Se convierte la respuesta de la API a formato JSON
            return request.json();
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    })
    .then( response => {
        //Se evalua que la respuesta sea correcta
        if(response.status) {
            //Se declaran los arreglos que almacenarán la información
            let usuarios = [];
            let cantidad = [];
            //Se recorren los datos de la API
            response.dataset.map( row => {
                //Se almacenan los valores
                usuarios.push(row.nombre_completo);
                cantidad.push(row.count);
            })
            //Se ejecuta la función que dibujará el gráfico
            donutGraph('usuariosQueMasCompran', usuarios, cantidad, 'Pedidos realizados', 'Los usuarios que más pedidos han realizado');
        }else {
            document.getElementById('usuariosQueMasCompran').remove();
            console.log(response.exception);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}

//Función para mostrar las categorías que más se han vendido
const graficoPastelCategoriasCatalogo = () => {
    //Se realiza la petición a la API
    fetch(API_CATEGORIAS + 'getCategoriasEnCatalogo')
    .then( request => {
        if(request.ok){
            //Se convierte la respuesta de la API a formato JSON
            return request.json();
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    })
    .then( response => {
        //Se evalua que la respuesta sea correcta
        if(response.status) {
            //Se declaran los arreglos que almacenarán la información
            let categoria = [];
            let cantidad = [];
            //Se recorren los datos de la API
            response.dataset.map( row => {
                //Se almacenan los valores
                categoria.push(row.categoria);
                cantidad.push(row.count);
            })
            //Se ejecuta la función que dibujará el gráfico
            pieGraph('categoriasEnCatalogo', categoria, cantidad, 'Cantidad', 'Categorías en el catálogo');
        }else {
            document.getElementById('categoriasEnCatalogo').remove();
            console.log(response.exception);
        }
    })
    .catch(function (error) {
        console.log(error);
    });
}