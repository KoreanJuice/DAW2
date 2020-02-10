let content = document.querySelector('#content01');
let oText = document.createElement('p')
oText.innerHTML = `otro texto`;

let p = [];
let cont = document.querySelector('main').querySelectorAll('p');
for (let i = 0; i < cont.length; i++) {
    p[i] = document.querySelector('main').querySelectorAll('p')[i];
    
}

p[0].addEventListener("click", e => {
    content.innerHTML = `<p>primer texto</p>
        <p>segundo texto</p>
        <p>tercer texto</p>`;
});
p[1].addEventListener("click", e => {
    content.innerHTML += oText;
});
p[2].addEventListener("click", e => {
    content.querySelectorAll('p')[1].insertBefore(oText, content.querySelectorAll('p')[1].nextSibling);
    //content.insertAfter(oText, content.querySelectorAll('p')[1]);
});
p[3].addEventListener("click", e => {

});
p[4].addEventListener("click", e => {

});
p[5].addEventListener("click", e => {

});
p[6].addEventListener("click", e => {

});