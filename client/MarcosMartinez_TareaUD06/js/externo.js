window.onload = iniciar;

function iniciar() {

	document.getElementById('enviar').addEventListener('click', validar);
	document.getElementById('nombre').addEventListener('focusout', convertirMayusculas);
	document.getElementById('apellidos').addEventListener('focusout', convertirMayusculas);
}

function validar(e) {
	if (validarCamposTexto(this) && validarEdad() && validarNif() && validarEmail() && validarProvincia() && validarFecha() && validarTelefono() && validarHora() && confirm("¿Deseas enviar el formulario?"))
		return true;
	else {
		e.preventDefault();
		return false;
	}
}

function validarCamposTexto(objeto) {
	let formulario = objeto.form;

	for (let i = 0; i < formulario.elements.length; i++) {
		formulario.elements[i].classList.remove('error');
		if (formulario.elements[i].type === 'text' && formulario.elements[i].value === '') {
			formulario.elements[i].classList.add('error');
			formulario.elements[i].focus();
			formulario.elements[i].innerHTML = `No puede estar vacio`;
			return false;
		}
	}
	return true;
}

function convertirMayusculas() {
	let name = document.getElementById('nombre');
	let surname = document.getElementById('apellidos');
	name.value = name.value.toUpperCase();
	surname.value = surname.value.toUpperCase();
}

function validarEdad() {
	const ageInput = document.getElementById('edad');
	const age = ageInput.value;

	if (isNaN(age) || age < 0 || age > 105) {
		ageInput.focus();
		ageInput.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: Introduce un número entre 0 y 105`;
		return false;
	}
	document.getElementById('edad').className = "";
	return true;
}

function validarTelefono() {
	let tlf = document.getElementById('telefono');
	let regex = /^[69]\d{8}$/;

	if (!tlf.value.match(regex)) {
		tlf.focus();
		tlf.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: Introduce un número válido`;
		return false;
	}
	document.getElementById("telefono").className = "";
	return true;
}

function validarEmail() {
	let email = document.getElementById('email');
	let regex = /^[A-z-.]{2,}@[A-z-.]{2,}[.][A-z-.]{2,4}$/;

	if (!email.value.match(regex)) {
		email.focus();
		email.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: No es un email válido.`;
		return false;
	}
	document.getElementById('email').className = "";
	return true;
}

function validarNif() {
	let nif = document.getElementById('nif');
	let regex = /^(\d{8})([A-Z])$/;

	if (!nif.value.match(regex)) {
		nif.focus();
		nif.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: No es un NIF válido.`;
		return false;
	}
	document.getElementById('nif').className = "";
	return true;
}

function validarProvincia() {
	let prv = document.getElementById('provincia');

	if (prv.value === '0') {
		prv.focus();
		prv.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: Selecciona una provincia.`;
		return false;
	}
	document.getElementById('provincia').className = "";
	return true;
}

function validarFecha() {
	let fecha = document.getElementById('fecha');
	let regex = /^[0-3]?\d([-/])[01]?\d\1[12]\d{3}$/;

	if (!fecha.value.match(regex)) {
		fecha.focus();
		fecha.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: No es una fecha válida.`;
		return false;
	}
	document.getElementById('fecha').className = "";
	return true;
}

function validarHora() {
	let hora = document.getElementById('hora');
	let regex = /^[0-2]\d:[0-5]\d$/;

	if (!hora.value.match(regex)) {
		hora.focus();
		hora.classList.add('error');
		document.getElementById('errores').innerHTML = `ERROR: No es una hora válida.`;
		return false;
	}
	document.getElementById('hora').className = "";
	return true;
}