// Coleção chaveada Set

// Estrutura do Set

const myArray = [1, 1, 2, 2, 3, 3, 4, 5, 4];

const mySet = new Set(myArray);

// Output: 1, 2, 3, 4, 5
// Sets são estruturas que armazenam apenas
// valores únicos, enquanto que no array podem
// ser repetidos


// Métodos do Set

const mySet = new Set();

// Para adicionar um valor
mySet.add(1);
mySet.add(5);

// Para verificar se tem um valor
mySet.has(1);
// true

mySet.has(3);
// false

mySet.delete(5);


// Diferenças entre Set e Arrays

/*
1. Sets possuem valores únicos;

2. Em vez da propriedade length (como arrays),
consulta-se o número de registros pela propriedade size;

3. Não possui os métodos map, filter, reduce, etc..

Array é mais flexível e o set o número de operações é mais limitado;

*/