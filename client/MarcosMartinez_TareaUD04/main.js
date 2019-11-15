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
  var inputBirth = prompt('introduce tu fecha de nacimiento (MM/DD/YYYY)');
  var birth = new Date(inputBirth.replace(/-/g,'/'));
  var today = new Date();
  if ( typeof name == "undefined" || name == null) {
    alert("recarga la página e introduce un nombre");
  } else if ( birth > today || isNaN(birth.getTime()) ) {
    alert("recarga la página e introduce una fecha valida");
  }
  var age = calculateAge(birth);
  document.body.innerHTML = `
    <p onclick="uno()">Clickea en mi!</p>
    <h1>TAREA DE JAVASCRIPT UD 04</h1>
    Buenas tardes: <strong>${name}</strong><br>
    Tu nombre tiene <strong>${name.length}</strong> caracteres, incluidos los espacios.<br>
    La primera letra A de tu nombre está en la posición: <strong>${name.search(/a/i)}</strong><br>
    La última letra A de tu nombre está en la posición: <strong>${name.toLowerCase().lastIndexOf('a')}</strong><br>
    Tu nombre menos las 3 primeras letras es: <strong>${name.slice(3)}</strong><br>
    Tu nombre en todo mayusculas es <strong>${name.toUpperCase()}</strong><br>
    Tu edad es: <strong>${age}</strong> años.<br>
    Naciste un feliz <strong>${getSeason(birth)}</strong> del año <strong>${birth.getFullYear()}</strong><br><!--invierno, verano-->
    El coseno de 180 es: <strong>${Math.cos(180)}</strong><br>
    El número menor de (34,67,23,75,35,19) es: <strong>${Math.min(34,67,23,75,35,19)}</strong><br>
    Ejemplo de número al azar: <strong>${Math.floor(Math.random() * 10)}</strong><br>
  `
}

const calculateAge = (birthday) => {
  var ageDifMs = Date.now() - birthday.getTime();
  var ageDate = new Date(ageDifMs);
  return Math.abs(ageDate.getUTCFullYear() - 1970);
}

const getSeason = (date) => {
    let month = date.getMonth() + 1;
    let season = '';
    switch (month) {
        case 12:
        case 1:
        case 2:
            season = 'invierno';
            break;
        case 3:
        case 4:
        case 5:
            season = 'primavera';
            break;
        case 6:
        case 7:
        case 8:
            season = 'verano';
            break;
        case 9:
        case 10:
        case 11:
            season = 'otoño';
            break;
    }
    console.log(season);
    return season;
}
