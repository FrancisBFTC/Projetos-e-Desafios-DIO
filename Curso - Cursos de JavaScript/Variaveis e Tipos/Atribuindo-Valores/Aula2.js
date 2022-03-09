// -----------------------------------------------------
// Exemplo de const usando Upper Snake Case

const FIRST_NAME = "Wenderson"; // <- correto

// FIRST_NAME = "Anjos"; <-- Não pode reatribuir
// const FIRST_NAME = "Anjos"; <-- Não pode redeclarar
console.log(FIRST_NAME);

// -----------------------------------------------------

// -----------------------------------------------------
// Exemplo de hoisting com const

//const LAST_NAME; <- Incorreto: Não pode declarar const antes

LAST_NAME = "Anjos";

console.log(LAST_NAME);

//const LAST_NAME; <- Incorreto: Não pode declarar const aqui
// Mesmo assim ainda vai aparecer "Anjos" no console
// -----------------------------------------------------