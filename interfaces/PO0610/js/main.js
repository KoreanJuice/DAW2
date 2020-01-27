document.getElementById('bold').addEventListener('click', bold);
document.getElementById('italic').addEventListener('click', italic);
document.getElementById('sub').addEventListener('click', underline);
document.getElementById('algL').addEventListener('click', alignLeft);
document.getElementById('algC').addEventListener('click', alignCenter);
document.getElementById('algR').addEventListener('click', alignRight);
document.getElementById('algF').addEventListener('click', alignFull);
document.getElementById('lno').addEventListener('click', ul);
document.getElementById('lor').addEventListener('click', ol);
document.getElementById('subI').addEventListener('click', subindice);
document.getElementById('supI').addEventListener('click', superindice);
document.getElementById('fco').addEventListener('click', colorTextRed);
document.getElementById('bco').addEventListener('click', highlightYellow);
document.getElementById('img').addEventListener('click', insertImg);
document.getElementById('url').addEventListener('click', link);


function bold() {
    document.execCommand('bold', false, null);
}
function italic() {
    document.execCommand('italic', false, null);
}
function underline() {
    document.execCommand('underline', false, null);
}
function alignLeft() {
    document.execCommand('justifyLeft', false, null);
}
function alignCenter() {
    document.execCommand('justifyCenter', false, null);
}
function alignRight() {
    document.execCommand('justifyRight', false, null);
}
function alignFull() {
    document.execCommand('justifyFull', false, null);
}
function ul() {
    document.execCommand('insertUnorderedList', false, null);
}
function ol() {
    document.execCommand('insertOrderedList', false, null);
}
function subindice() {
    document.execCommand('subscript', false, null);
}
function superindice() {
    document.execCommand('superscript', false, null);
}
function colorTextRed() {
    document.execCommand('foreColor', false, 'red');
}
function highlightYellow() {
    document.execCommand('hiliteColor', false, 'yellow');
}
function insertImg() {
    document.execCommand('insertImage', false, 'img/imagen.jpg');
}
function link() {
    document.execCommand('createLink', false, 'http://google.es');
}