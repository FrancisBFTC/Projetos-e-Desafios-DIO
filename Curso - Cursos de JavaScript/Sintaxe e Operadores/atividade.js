/* Minha solução Abaixo - Adicionado Antes da aula*/

function CheckNumbers(x, y){
	if(!x || !y) 
		return 'A função CheckNumbers() espera 2 parâmetros!';

	let string = "Os números " + x + " e " + y + " ";
	let soma = x + y;
	string += (x === y) ? " são iguais. " : " não são iguais. ";
	string += "Sua soma é " + soma + ", ";
	if(soma < 10)
		string += "que é menor que 10 e menor que 20";
	else if(soma < 20)
		string += "que é maior que 10 e menor que 20";
	else{
		string += "que é maior que 10 e maior que 20";
	}

	console.log(string);
	return string;
}

/* Solução da Professora Abaixo - Adicionado Depois
 Obs.: Executar no Node.js
*/

function compareNumbers(num1, num2){
	if(!num1 || !num2) return 'Defina dois números!';

	const firstPhrase = createFirstPhrase(num1, num2); 
	const secondPhrase = createSecondPhrase(num1, num2);

	return '${firstPhrase} ${secondPhrase}';
}

function createFirstPhrase(num1, num2){
	let isEqual = '';

	if(num1 !== num2)
		isEqual = 'não';

	return 'Os números ${num1} e ${num2} ${isEqual} são iguais.';
}

function createSecondPhrase(num1, num2){
	const sum = num1 + num2;

	let result10 = 'menor';
	let result20 = 'menor';
	const compare10 = sum > 10;
	const compare20 = sum > 20;

	if(compare10)
		result10 = 'maior';

	if(compare20)
		result20 = 'maior';

	return 'Sua soma é ${sum}, que é ${result10} que 10 e ${result20} que 20.';
}

console.log(compareNumbers(1, 2));