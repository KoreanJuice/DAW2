document.addEventListener("dragstart", e => {
    e.dataTransfer.setData("div", e.target.id);
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
    if (e.target.className === "arrastra-aqui") {
        var data = e.dataTransfer.getData("div");
        if (e.target.id === 'mesa' && document.getElementById(data).id === 'mantel') {
            e.target.appendChild(document.getElementById(data));
        }
        if (e.target.id === 'c-mantelito' && document.getElementById(data).id === 'mantelito') {
            e.target.appendChild(document.getElementById(data));
        }
        if (e.target.id === 'c-plato' && document.getElementById(data).id === 'plato') {
            e.target.appendChild(document.getElementById(data));
        }
        if (e.target.id === 'c-cubiertos' && document.getElementById(data).id === 'cubiertos') {
            e.target.appendChild(document.getElementById(data));
        }
        if (e.target.id === 'c-vaso' && document.getElementById(data).id === 'vaso') {
            e.target.appendChild(document.getElementById(data));
        }
    }
});