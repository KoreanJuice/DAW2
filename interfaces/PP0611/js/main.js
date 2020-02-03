document.getElementById('icon-cart').addEventListener('click', e => {
    let cart = document.getElementById('cart');
    let cartOpen = false;
    if (cartOpen) {
        cart.style.display = 'none';
        cartOpen = false;
    } else {
        cart.style.display = 'inline-table';
        cartOpen = true;
    }
});

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
    if (e.target.id === 'cart') {
        e.target.style.background = '#eaeded';
    }
});

document.addEventListener("dragleave", e => {
    e.preventDefault();
    if (e.target.id === 'cart') {
        e.target.style.background = 'white';
    }
});

document.addEventListener("drop", e => {
    e.preventDefault();
    if (e.target.id === 'cart') {
        e.target.style.background = 'white';
        e.target.innerHTML += dragged.parentNode.nextSibling.nextElementSibling.innerHTML;
    }
});