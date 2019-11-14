const isJavaAvailable = () => navigator.javaEnabled();
const uno = () => {
  let newWin = window.open('','', 'width=800, height=600');
  newWin.document.body.innerHTML = `
    <h3>Ejemplo de ventana nueva</h3>
    <span>url: ${window.location.href}</span><br>
    <span>protocol: ${window.location.protocol}</span><br>
    <span>cod navegador: ${navigator.userAgent}</span><br>
    ${(isJavaAvailable() ? '<span>Java SI está disponible en esta ventana</span><br>' : '<span>Java NO está disponible en esta ventana</span><br>')}
    <iframe src="https://jugacu.es" width="800" height="600"></iframe><br>
  `
}

const dos = () => {
  var name = prompt('introduce tu nombre');
  var birth = new Date(prompt('introduce tu fecha de nacimiento (dd/mm/yyyy)'));
  var age = (new Date() - age).getFullYear();
/*  if (date instanceof Date && !isNaN(date.valueOf())) {

  } else {

  }*/
  document.body.innerHTML = `
    <p onclick="uno()">Clickea en mi!</p>
    <h1>TAREA DE JAVASCRIPT UD 04</h1>
    Buenas tardes: <strong>${name}</strong><br>
    Tu nombre tiene <strong>${name.length}</strong> caracteres, incluidos los espacios.<br>
    La primera letra A de tu nombre está en la posición: <strong>${name.search(/a/i)}</strong><br>
    La última letra A de tu nombre está en la posición: <strong>${name.toLowerCase().lastIndexOf('a')}</strong><br>
    Tu nombre menos las 3 primeras letras es: <strong>${name.slice(3)}</strong><br>
    Tu nombre en todo mayusculas es <strong>${name.toUpperCase()}</strong><br>
    <!-- TODO: -->
    Tu edad es: <strong>${age}</strong> años.<br>
    Naciste un feliz <strong>${name}</strong> del año <strong>${name}</strong><br><!--invierno, verano-->
    <!---->
    El coseno de 180 es: <strong>${Math.cos(180)}</strong><br>
    El número menor de (34,67,23,75,35,19) es: <strong>${Math.min(34,67,23,75,35,19)}</strong><br>
    Ejemplo de número al azar: <strong>${Math.floor(Math.random() * 10)}</strong><br>
  `
}
