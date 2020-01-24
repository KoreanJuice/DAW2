let dragged;

document.addEventListener("dragstart", e => {
    dragged = e.target;
    e.target.style.opacity = .4;
});

document.addEventListener("dragend", e => {
    e.target.style.opacity = 1;
});

document.addEventListener("dragover", e => {
    e.preventDefault();
});

document.addEventListener("dragenter", e => {
    e.preventDefault();
    if (e.target.id === 'cesta') {
        e.target.style.background = '#caff62';
    }
});

document.addEventListener("dragleave", e => {
    e.preventDefault();
    if (e.target.id === 'cesta') {
        e.target.style.background = '#a9ff00';
    }
});

document.addEventListener("drop", e => {
    e.preventDefault();
    if (e.target.id === 'cesta') {
        e.target.style.background = '#a9ff00';
        e.target.innerHTML += dragged.parentNode.nextSibling.nextElementSibling.innerHTML;
    }
});