import mostrarCategorias from '../public/modules/mostrarCategorias.js'
import categoriaSeleccionada from '../public/modules/categoriaSeleccionada.js'

let btnCategorias = document.querySelector('.menu--titulo');
btnCategorias.addEventListener('click', mostrarCategorias);

/*************DEFINIENDO LOS BOTONES**************/
let btnVestidos = document.getElementById('btnVestidos')
let btnPantalones = document.getElementById('btnPantalones')
let btnTrajesBaño = document.getElementById('btnTrajesBaño')
let btnHogar = document.getElementById('btnHogar')
let btnCamisetas = document.getElementById('btnCamisetas')
let btnAccesorios = document.getElementById('btnAccesorios')
let btnLenceria = document.getElementById('btnLenceria')

/*************DEFINIENDO LOS EVENTOS**************/
btnVestidos.addEventListener('click', () => {
    categoriaSeleccionada('btnVestidos');
});
btnPantalones.addEventListener('click', () => {
    categoriaSeleccionada('btnPantalones')
});
btnTrajesBaño.addEventListener('click', () => {
    categoriaSeleccionada('btnTrajesBaño')
});
btnHogar.addEventListener('click', () => {
    categoriaSeleccionada('btnHogar')
});
btnCamisetas.addEventListener('click', () => {
    categoriaSeleccionada('btnCamisetas')
});
btnAccesorios.addEventListener('click', () => {
    categoriaSeleccionada('btnAccesorios')
});
btnLenceria.addEventListener('click', () => {
    categoriaSeleccionada('btnLenceria')
});