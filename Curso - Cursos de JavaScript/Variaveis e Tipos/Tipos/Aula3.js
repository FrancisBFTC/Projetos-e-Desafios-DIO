// -----------------------------------------------------
// Trabalhando com números

let num = 100;

console.log(100 + 3);

// não modifica num
console.log(num + 3);

// resto de um número (É divisível?)
console.log(num % 2);

// -----------------------------------------------------

// -----------------------------------------------------
// Bibliotecas de números em JavaScript

// tipo de Math
console.log(typeof(Math));

// valor de PI
console.log(Math.PI);

let fiveByThree = 5 / 3;
console.log(fiveByThree);

// O método floor aredonda para baixo (Para 1)
console.log(Math.floor(fiveByThree));

// O método floor aredonda para cima (Para 2)
console.log(Math.ceil(fiveByThree));

// % é interpretado como "módulo" então pra mostrar
// porcentagens é preciso concatenar com a String %
let percent = 10;

console.log(percent + "%");

// Convertendo número para String
console.log(percent.toString());
// -----------------------------------------------------