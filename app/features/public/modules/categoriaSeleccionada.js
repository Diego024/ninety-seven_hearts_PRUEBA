
let btnVestidos = document.getElementById('btnVestidos')
let btnPantalones = document.getElementById('btnPantalones')
let btnTrajesBaño = document.getElementById('btnTrajesBaño')
let btnHogar = document.getElementById('btnHogar')
let btnCamisetas = document.getElementById('btnCamisetas')
let btnAccesorios = document.getElementById('btnAccesorios')
let btnLenceria = document.getElementById('btnLenceria')

let categorySeleccionada = btn => {
    
    switch (btn) {
        case 'btnVestidos': 
            btnVestidos.classList.add('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnPantalones':
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.add('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnTrajesBaño':
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.add('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnHogar': 
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.add('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnCamisetas':
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.add('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnAccesorios':
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.add('categoria__selected');
            btnLenceria.classList.remove('categoria__selected');
        break;
        case 'btnLenceria':
            btnVestidos.classList.remove('categoria__selected');
            btnPantalones.classList.remove('categoria__selected');
            btnTrajesBaño.classList.remove('categoria__selected');
            btnHogar.classList.remove('categoria__selected');
            btnCamisetas.classList.remove('categoria__selected');
            btnAccesorios.classList.remove('categoria__selected');
            btnLenceria.classList.add('categoria__selected');
        break;
    }
}

export default categorySeleccionada