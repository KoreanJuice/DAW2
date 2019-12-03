const Smartphone = class extends DispositivoMovil {

    constructor(marca, modelo, color, desc, resolucion){
        super(marca, modelo, color, desc);
        this.resolucion = resolucion;
    }

    verResolucion(){
        let temp = '';
        temp += this.mostrarDatos() + `Camara: ${this.resolucion}<br>`;
        return temp;
    }
}