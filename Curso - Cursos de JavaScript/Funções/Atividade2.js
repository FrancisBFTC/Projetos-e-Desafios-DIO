// Solução para 2ª atividade

const pessoa1 = {
	nome : 'João',
	idade: 20
};

const pessoa2 = {
	nome : 'Miguel',
	idade: 30
};

const animal = {
	nome : 'Dara',
	idade: 2,
	raca : 'Pitbull' 
};

function calculaIdade(anos) {
	return `Daqui a ${anos} anos, ${this.nome} terá ${
		this.idade + anos
	} anos de idade.`;
}

let firstValue = calculaIdade.call(pessoa1, 26);
let secondValue = calculaIdade.call(pessoa2, 27);
let thirdValue = calculaIdade.apply(animal, [7]);

console.log(firstValue);
console.log(secondValue);
console.log(thirdValue);

