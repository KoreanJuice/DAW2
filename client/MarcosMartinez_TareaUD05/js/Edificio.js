export default class Edificio {

    constructor (calle = null, numero = '0', cPostal = '0', plantas = 2, puertas = 4) {
        this.calle = calle;
        this.numero = numero;
        this.cPostal = cPostal;
        this.plantas = plantas;
        this.agregarPlantasYPuertas(plantas, puertas);
        /* add to html => 
            construido nuevo edificio en calle: {calle}, nº: {numero}, CP: {cPostal}.
        */
    }

    agregarPlantasYPuertas = (plantas, puertas) => {

    }
    
    modificarNumero = (numero) => {
        this.numero = numero;
    }

    modificarCodigoPostal = (codigo) => {
        this.cPostal = codigo;
    }

    agregarPropietario = (nombre, planta, puerta) => {
        
        /* add to html => 
            {nombre} es ahora el propietario de la puerta {puerta} de la planta {planta}.
            (datos cualesquiera)
        */
    }

    imprimeCalle = () => {
        return this.calle;
    }

    imprimeNumero = () => {
        return this.numero;
    }

    imprimeCodigoPostal = () => {
        return this.cPostal;
    }

    imprimePlantas = () => {
        return this.plantas;
    }
}