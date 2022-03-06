function CheckNumbers(x, y){
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
