export default class DispositivoMovil {

    constructor(marca = 's/n', modelo = 's/n', color = 's/n', descripcion = 's/n') {
        this.marca = marca;
        this.modelo = modelo;
        this.color = color;
        this.descripcion = descripcion;
        this.reg = document.getElementById('reg');
    }

    mostrarDatos() {
        let temp = '';
        temp += `
            Marca: ${this.marca}<br>
            Modelo: ${this.modelo}<br>
            Color: ${this.color}<br>
            Descripcion: ${this.descripcion}<br>
        `;
        return temp;
    }
}