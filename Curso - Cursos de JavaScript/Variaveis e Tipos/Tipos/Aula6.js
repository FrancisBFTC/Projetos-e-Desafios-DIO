// -----------------------------------------------------
// trabalhando com objetos

let person = {      // objeto
	name : 'john',  // valor 1
	age : 20        // valor 2
};

// retornando o tipo da estrutura (objeto)
console.log(typeof(person));

// acessar o valor de name
console.log(person.name);

// acessar o valor de age
console.log(person.age);

// Alterando o valor de name
person.name = 'Wender';

// Alterando o valor de age
person.age = 'Francis';

// Exibindo os novos valores
console.log(person.name);
console.log(person.age);

// Exibindo todas as propriedades do objeto
console.log(person);

// retornando os valores usando Object
console.log(Object.values(person));

// retornando as chaves usando Object
console.log(Object.keys(person));

// acessando o objeto de outra forma através do índice
console.log(person["name"]);
console.log(person["age"]);

// adicionando uma nova propriedade facilmente
person["Address"] = "Quadra 29";
console.log(person);

// criando uma chave com o valor de uma variável
let mom = "nameOfMom";
person[mom] = "Aparecida";
console.log(person);

// criando uma chave com a própria variável
person.father = "James";
console.log(person);

// -----------------------------------------------------