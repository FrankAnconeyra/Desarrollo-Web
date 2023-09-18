var bandera = false;
console.log(typeof bandera);

function miFuncion(){}
console.log(typeof miFuncion);

var simbolo = Symbol("mi simbolo");
console.log(typeof simbolo)

class Persona{
    constructor(nombre, apellido){
        this.nombre = nombre;
        this.apellido = apellido;
    }
}
console.log(typeof Persona);

var x;
console.log(typeof x);

x= undefined;
console.log(typeof x);

var y = null;
console.log(typeof y);
