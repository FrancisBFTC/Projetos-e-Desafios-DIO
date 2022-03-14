// Diferença entre "Throw" e "Return"

// Throw
// Usando exemplo da função utiliza em aulas passadas
// Porém ao invés de "return", utilizaremos "Throw"
function verificaPalindromo(string){
	if(!string) throw "String inválida";

	return string === string.split('').reverse().join('');
}

// verificaPalindromo('');
// O mesmo resultado é obtido porém na parte do console
// do navegador, é apresentada o objeto e propriedades completa do Erro


// Implementação da declaração try/catch
// tratamento de erros

try{
	verificaPalindromo('');
}
catch(e){
	// aqui a excessão do Throw é exibida na tela
	console.log(e);

	// poderia ser um 'throw e' também
}

// utilizando throw e
try{
	verificaPalindromo('');
}
catch(e){
	// aqui a excessão do Throw é exibida na tela
	throw e;

	// poderia ser um 'throw e' também
}

// Utilizando Finally

function finallyExample(string){
	try{
		verificaPalindromo(string);
	}
	catch(e){
		// aqui a excessão do Throw é exibida na tela
		throw e;
	}
	finally {
		console.log('String enviada foi:' + string);
	}
}

finallyExample('');