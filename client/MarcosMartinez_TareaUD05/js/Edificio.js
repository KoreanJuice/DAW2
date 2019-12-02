export default class Edificio {

    constructor (calle = null, numero = 's/n', cPostal = '0') {
        this.calle = calle;
        this.numero = numero;
        this.cPostal = cPostal;
        this.plantas = [];
        this.agregarPlantasYPuertas(0, 0);

        this.registro = document.getElementById('registro');
        if (calle != null) {
            this.registro.innerHTML += `<p>Construido nuevo edificio en calle ${calle}, nº ${numero}, CP ${cPostal}.</p>`;
        } else {
            this.registro.innerHTML += `<p>Asigna una calle al edificio</p>`;
        }
    }

    agregarPlantasYPuertas(n_plantas, n_puertas) {
        if (n_puertas < 0 || typeof n_puertas === 'undefined' || n_puertas === null) {
            this.registro.innerHTML += `<p>NO se pueden introducir número de puertas negativos o nulos.</p>`
            return;
        }
        for (let i = 0; i < n_plantas; i++) {
            const puertas = [];
            this.plantas.push(puertas);
            for (let j = 0; j < n_puertas; j++) {
                puertas.push('vacio');
            }
        }
    }
    
    modificarNumero(numero) {
        this.numero = numero;
    }

    modificarCodigoPostal(codigo) {
        this.cPostal = codigo;
    }

    agregarPropietario(nombre, planta, puerta) {
        if (planta > this.plantas.length || typeof planta === 'undefined' || planta === null ) {
            this.registro.innerHTML += `<p>PROPIETARIO ${nombre} NO ASIGNADO La puerta ${puerta} del piso ${planta} no existe </p>`
            return;
        }
        this.plantas[planta][puerta] = nombre;
        this.registro.innerHTML += `
            <p>${nombre} es ahora el propietario de la puerta ${puerta} de la planta ${planta}.</p>
        `;
    }

    imprimeCalle() {
        this.registro.innerHTML += `<p>La calle del edificio nº ${this.numero} es ${this.calle}</p>`;
    }

    imprimeNumero() {
        this.registro.innerHTML += `<p>El número del edificio en ${this.calle} es ${this.numero}</p>`;
    }

    imprimeCodigoPostal() {
        this.registro.innerHTML += `<p>El código postal del edificio en la calle ${this.calle} con nº ${this.numero} es ${this.cPostal}</p>`;
    }

    imprimePlantas() {
        this.registro.innerHTML += '<p>';
        this.registro.innerHTML += `<strong>Listado de propietarios del edificio calle ${this.calle} nº ${this.numero}</strong><br>`
        this.plantas.forEach((planta, n_planta) => {
            planta.forEach((puerta, n_puerta) => {
                this.registro.innerHTML += `
                El propietario del piso ${n_puerta} de la planta ${n_planta} es: ${puerta}.<br>
                `;
            });
        });
        this.registro.innerHTML += '</p>';
    }
}