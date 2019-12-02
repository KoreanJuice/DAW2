import Edificio from "./Edificio.js";

const edificioA = new Edificio('Avda. de la Paz','158', '26005');
const edificioB = new Edificio('Rep. Argentina','89', '26007');
const edificioC = new Edificio('Las Gaunas', undefined, '26008');
edificioC.imprimeCodigoPostal();
edificioC.imprimeCalle();
edificioB.imprimeCalle();
edificioA.agregarPlantasYPuertas(3, 4);
edificioA.agregarPropietario('Marco Antonio Italiano', 1, 1);
edificioA.agregarPropietario('Luisa Martinez', 1, 2);
edificioA.agregarPropietario('Marta Castejon', 1, 3);
edificioA.agregarPropietario('Bernabe Ortigosa', 2, 2);
edificioA.imprimePlantas();
edificioA.agregarPlantasYPuertas(5, -1);
edificioA.agregarPlantasYPuertas(1, 3);
edificioA.agregarPropietario('Pedro Picapiedra', 3, 2);
edificioA.agregarPropietario('Pablo Mármol', 6, 2);
edificioA.imprimePlantas();