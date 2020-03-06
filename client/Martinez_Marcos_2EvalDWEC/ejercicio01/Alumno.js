const Alumno = class extends Persona {

    constructor(nombre, edad, sexo, curso, email, estudios) {
        super(nombre, edad, sexo);
        this.curso = curso;
        this.email = email;
        this.estudios = estudios;
    }

    matricular() {
        
    }
};