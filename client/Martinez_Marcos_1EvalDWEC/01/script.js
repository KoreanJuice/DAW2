const reg = document.getElementById('reg');
const input = prompt('escribe algo');

reg.innerHTML += `
    A- primera mitad: <strong>${input.slice(0, input.length/2)}</strong> <br>
    B- imprimir el ultimo caracter: <strong>${input.charAt(input.length-1)}</strong> <br>
    C- inverso: <strong>${inverso(input)}</strong> <br>
    D- por caracter con guion <strong>${guion(input)}</strong> <br>
    E- cantidad de vocales <strong>${vocales(input)}</strong> <br>
`;

function guion(input) {
    let temp = '';
    for (let i = 0; i < input.length; i++) {
        temp += `${input.charAt(i)}-`;
    }
    temp = temp.slice(0, temp.length-1);
    return temp;
}

function inverso(input) {
    let temp = '';
    for (let i = input.length; i >= 0; i--) {
        temp += input.charAt(i);
    }
    return temp;
}

function vocales(input) {
    let cont = 0;
    for (let i = 0; i < input.length; i++) {
        if (input[i] === 'a' || input[i] === 'e' || input[i] === 'i' || input[i] === 'o' || input[i] === 'u') {
            cont++;
        }
    }
    return cont;
}