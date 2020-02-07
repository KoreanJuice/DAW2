let content = document.querySelector('#content01');
let oText = document.createElement('p')
oText.innerHTML = `otro texto`;

let p0 = document.querySelector('main').querySelectorAll('p')[0]
let p1 = document.querySelector('main').querySelectorAll('p')[1]
let p2 = document.querySelector('main').querySelectorAll('p')[2]
let p3 = document.querySelector('main').querySelectorAll('p')[3]
let p4 = document.querySelector('main').querySelectorAll('p')[4]
let p5 = document.querySelector('main').querySelectorAll('p')[5]
let p6 = document.querySelector('main').querySelectorAll('p')[6]
p0.addEventListener("click", e => {
    content.innerHTML = `<p>primer texto</p>
        <p>segundo texto</p>
        <p>tercer texto</p>`;
});
p1.addEventListener("click", e => {
    content.innerHTML += `<p>otro texto</p>`;
});
p2.addEventListener("click", e => {
    content.insertBefore(oText, content.querySelectorAll('p')[2]);
});
p3.addEventListener("click", e => {

});
p4.addEventListener("click", e => {

});
p5.addEventListener("click", e => {

});
p6.addEventListener("click", e => {

});