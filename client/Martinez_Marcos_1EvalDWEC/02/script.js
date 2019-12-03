import DispostivoMovil from "./dispositivoMovil.js";
import Smartphone from "./smartphone.js";
import Tablet from "./tablet.js";

const smart = new Smartphone('Huawey', 'P30 Aurora', 'Azul', 'texto aqui asdasdasd', '40 MPx');
const tablet = new Tablet('Samsung', 'S5e', 'Plata', 'texto aqui asdasdasd', 'Qualcom');

const hDesc = document.getElementById('hDesc');
const hCoste = document.getElementById('hDhCosteesc');
const sDesc = document.getElementById('sDesc');
const sCoste = document.getElementById('sCoste');
this.reg = document.getElementById('reg');


hDesc.innerHTML += smart.verResolucion();
hCoste.innerHTML += `459.00€`;
sDesc.innerHTML += tablet.verProcesador();
sCoste.innerHTML += `439.90€`;

function adquirirHuawei() {
    reg.innerHTML += smart.verResolucion();
}
function adquirirSamsung() {
    reg.innerHTML += tablet.verProcesador();
}