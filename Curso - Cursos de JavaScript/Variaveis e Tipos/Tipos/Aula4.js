// -----------------------------------------------------
// Trabalhando com valores booleanos

// retorna false
let validation = 3 === 0;
console.log(validation);

// retorna true
validation = 3 === 3;
console.log(validation);

// retorna false
validation = 3 > 4;
console.log(validation);

// transformar booleano em String
let valor = validation.toString();
console.log(valor, 'é uma', typeof(valor));

// retorna o contrário do valor booleano
// era false e agora true
console.log(!validation);

// -----------------------------------------------------