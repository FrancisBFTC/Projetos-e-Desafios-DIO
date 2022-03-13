// Exemplo de This
/*
Uma referência ao objeto
*/

const pessoa = {
	firstName: "Wenderson",
	lastName : "Anjos",
	id       : 1,
	getFullName: function(){ // é chamado de método
		return this.firstName + " " + this.lastName;
	}, 
	getId: function(){       // é chamado de método
		return this.id;
	}
};

console.log(pessoa.getFullName());
// Retorna Wenderson Anjos
console.log(pessoa.getId());
// Retorna 1


/*
 O valor do this pode mudar de acordo com o lugar
 no código onde foi chamada
*/

/*
 CONTEXTO                  REFERÊNCIA
-----------------------------------------------------------------
 Em um objeto (método)     Próprio objeto dono do método
 ----------------------------------------------------------------
 Sozinha                   Objeto global (em navegadores,window)
 ----------------------------------------------------------------
 Função                    Objeto global
 ----------------------------------------------------------------
 Evento                    Elemento que recebeu o evento
-----------------------------------------------------------------
*/

// Fora de função

console.log(this);

// Dentro de uma função
// autoinvocável

(
	function(){
		console.log(this);
	}

)();

// Dentro de um objeto

const people = {
	firstName: 'André',
	lastName: 'Santiago',
	getFullName: function(){
		console.log(`${this.firstName} ${this.lastName}`);
	}
};

people.getFullName();


// Em um evento do HTML (Veja o arquivo eventoBotao.html)

// Utilizando método CALL

const pessoa1 = {
	nome: 'Wender'
};

const animal = {
	nome: 'Dara'
};

function getSomething(){
	console.log(this.nome);
}

getSomething.call(pessoa1);
getSomething.call(animal);


// Utilizando CALL e argumentos

const base = {
	num1 : 10,
	num2: 6
};

function formula(a, b){
	console.log(((this.num1 + this.num2) * a) / b)
}

formula.call(base, 2, 4);

// Utilizando Apply (mesmo resultado do call)

getSomething.apply(pessoa1);
getSomething.apply(animal);

// Diferença do Apply e o Call
// O Apply vai passar os parâmetros da função
// dentro de um array
// No entanto, o resultado aqui também será o mesmo

const base2 = {
	num1 : 10,
	num2: 6
};

function formula2(a, b){
	console.log(((this.num1 + this.num2) * a) / b)
}

formula2.apply(base2, [2, 4]);


// Bind: Esta função faz um clone da estrutura 
// da função e retorna para uma variável que vai 
// se tornar o retorno da função clonada

const retornaNomes = function(){
	return this.nome;
};

let Ezequiel = retornaNomes.bind({nome: 'Ezequiel'});

console.log(Ezequiel());

// Outro exemplo de Bind

const retornaNumero = function(){
	return this.num2;
};

let numeroBase = retornaNumero.bind(base);

console.log(numeroBase());

