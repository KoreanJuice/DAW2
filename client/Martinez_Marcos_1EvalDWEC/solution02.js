var productos = new Array();
productos[0] = {
    marca: "huawei",
    desc: "desc"
}
productos[1] = {
    marca: "tablet",
    desc: "desc2"
}

function dMovil(marca, desc) {
    this.marca = marca;
    this.desc = desc;
    this.prototype.MostrarDatos = function(){
        function smartphone(loquesea) {
            dMovil.call(marca, desc);
            this.loquesea = loquesea;
            smartphone.prototype.verResolucion = function () {
                
            }
        }
    }
}