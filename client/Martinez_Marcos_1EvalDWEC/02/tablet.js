const Tablet = class extends DispositivoMovil {

    constructor(marca, modelo, color, desc, procesador, ram){
        super(marca, modelo, color, desc);
        this.procesador = procesador;
        this.ram = ram;
    }
    
    verProcesador() {
        let temp = '';
        temp += this.mostrarDatos() + 
        `Camara: ${this.resolucion}<br>
        RAM: ${this.ram}<br>`;
        return temp;
    }
}