const horaAct = document.getElementById('horaActual');
const minAct = document.getElementById('minActual');
const secAct = document.getElementById('secActual');

const hora = document.getElementById('hora');
const min = document.getElementById('min');
let alarmaHora = undefined;
let alarmaMin = undefined;

const activar = document.getElementById('activar');
const desactivar = document.getElementById('desactivar');

const img = document.getElementById('img');

// hora actual
const now = () => {
    const dateOutput = new Date();

    horaAct.innerHTML = dateOutput.getHours();
    minAct.innerHTML = dateOutput.getMinutes();
    secAct.innerHTML = dateOutput.getSeconds();
}
now();

//actualizacion continuna de hora
let actualizar = setInterval(() => {
    now();
    let hour = new Date().getHours();
    let min = new Date().getMinutes();

    if(hour == alarmaHora && min == alarmaMin){
        img.style.display = 'block';
    }
}, 1000);

//botones
activar.addEventListener('click', () => {
    alarmaHora = hora.value;
    alarmaMin = min.value;
    img.style.display = 'none';
})

desactivar.addEventListener('click', () => {
    hora.value = '';
    min.value = '';
    alarmaHora = undefined;
    alarmaMin = undefined;
    img.style.display = 'none';
})
