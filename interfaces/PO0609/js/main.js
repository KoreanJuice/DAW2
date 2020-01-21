let dataTransfer = new DataTransfer();
// contenedor
function entrar(ev) {
    return(true);
}
function encima(ev) {
    //return false;
    var arrastableId = dataTransfer.getData("Data");
    var contenedorId = ev.target.getAttribute('id');
    
    if (arrastableId === 'arrastable3' && contenedorId === 'contenedor3') {
        return false;
    } else if (arrastableId === 'arrastable2' && contenedorId === 'contenedor2') {
        return false;
    } else if (contenedorId === 'contenedor1') {
        return false;
    } else {
        return true;
    }
}
function soltar(ev) {
    var arrastableId = dataTransfer.getData("Data");
    ev.target.appendChild(document.getElementById(arrastableId));
    ev.stopPropagation();
    return false;
}
function abortar(ev) {
    return true;
}
// arrastable
function empezar(ev) {
    dataTransfer.effectAllowed = 'move';
    dataTransfer.setData("Data",ev.target.getAttribute('id'));
    dataTransfer.setDragImage(ev.target,0,0);
    console.log(dataTransfer.setData("Data",ev.target.getAttribute('id')));
    return true;
}
function terminar(ev) {
    dataTransfer.clearData("Data");
    return true;
}