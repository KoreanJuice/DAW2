const isJavaAvailable = () => navigator.javaEnabled();
const owo = () => {
  let newWin = window.open('','', 'width=800, height=600');
  newWin.document.body.innerHTML =
    '<h3>Ejemplo de ventana nueva</h3>' +
    'url: ' + window.location.href + '<br>' +
    'protocol: ' + window.location.protocol + '<br>' +
    'cod navegador: ' + navigator.userAgent + '<br>' +
    (isJavaAvailable() ? 'Java SI está disponible en esta ventana<br>' : 'Java NO está disponible en esta ventana<br>') +
    '<iframe src="https://jugacu.es" width="800" height="600"></iframe><br>'
}

const ewe = () => {
  var name = prompt('introduce tu nombre');
  var nac = prompt('introduce tu fecha de nacimiento (dd/mm/yyyy)');
  document.body.innerHTML =
  '<p onclick="owo()">Clickea en mi!</p><br>' +
  '<h1>TAREA DE JAVASCRIPT UD 04</h1><br>' +
  'Buenas tardes: <strong>' + name + '</strong><br>' +
  'Tu nombre tiene <strong>' + name + '</strong> caracteres, incluidos los espacios.<br>' +
  'La primera letra A de tu nombre está en la posición: <strong>' + name + '</strong><br>' +
  'La última letra A de tu nombre está en la posición: <strong>' + name + '</strong><br>' +
  'Tu nombre menos las 3 primeras letras es: <strong>' + name + '</strong><br>' +
  'Tu edad es: <strong>' + nac + '</strong> años.<br>' +
  'Naciste un feliz <strong>' + nac + '</strong> del año <strong>' + name + '</strong><br>' + //invierno, verano
  'El coseno de 180 es: <strong>' + nac + '</strong><br>' +
  'El número menor de (34,67,23,75,35,19) es: <strong>' + nac + '</strong><br>' +
  'Ejemplo de número al azar: <strong>' + nac + '</strong><br>'
}
