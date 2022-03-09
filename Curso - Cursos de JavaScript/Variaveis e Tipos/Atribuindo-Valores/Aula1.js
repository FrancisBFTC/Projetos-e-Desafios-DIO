// -----------------------------------------------------
// Exemplo de Hoisting
// Formato de variáveis camelCase

numberOne = 1;

console.log(numberOne + 2);

// Não pode fazer isto com let
var numberOne;

// -----------------------------------------------------


// -----------------------------------------------------
// Exemplo de var e let
// O ideal é utilizar let por segurança

var firstName = 'João';
var lastName = 'Souza'; // mesma coisa para o let

if(firstName === 'João'){
	// let lastName = "Rodrigues"; // não pode redeclarar com let, apenas com var
	var firstName = 'Pedro'; // Redeclaração
	let lastName = 'Silva';  // Apenas escopo local
}

console.log(firstName, lastName);
// -----------------------------------------------------