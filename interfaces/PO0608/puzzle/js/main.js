document.addEventListener("dragstart", e => {
    e.dataTransfer.setData("img", e.target.id);
    e.target.style.opacity = "0.4";
});

document.addEventListener("dragend", e => {
    e.target.style.opacity = "1";
});

document.addEventListener("dragover", e => {
    e.preventDefault();
});

document.addEventListener("drop", e => {
    e.preventDefault();
    var data = e.dataTransfer.getData("img");
    if (e.target.id === 'c-pieza1' && document.getElementById(data).id === 'pieza1') {
        e.target.appendChild(document.getElementById(data));
    }
    if (e.target.id === 'c-pieza2' && document.getElementById(data).id === 'pieza2') {
        e.target.appendChild(document.getElementById(data));
    }
    if (e.target.id === 'c-pieza3' && document.getElementById(data).id === 'pieza3') {
        e.target.appendChild(document.getElementById(data));
    }
    if (e.target.id === 'c-pieza4' && document.getElementById(data).id === 'pieza4') {
        e.target.appendChild(document.getElementById(data));
    }
    if (e.target.id === 'c-pieza5' && document.getElementById(data).id === 'pieza5') {
        e.target.appendChild(document.getElementById(data));
    }
    if (e.target.id === 'c-pieza6' && document.getElementById(data).id === 'pieza6') {
        e.target.appendChild(document.getElementById(data));
    }
});