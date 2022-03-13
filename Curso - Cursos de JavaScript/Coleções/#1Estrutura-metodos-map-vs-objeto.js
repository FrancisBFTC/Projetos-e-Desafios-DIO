// Estrutura do Map
/*
Uma coleção de arrays no formato [chave, valor];
Pode ser iterador por um loop for...of
*/

const myMap = new Map();


// Métodos
// Coleções chaveadas

myMap.set('apple', 'fruit');
// Map(1) {"apple" => "fruit"}

myMap.get(apple);
// "fruit"

myMap.delete("apple");
// true

myMap.get("apple");
// undefined

// Map vs Objeto -> Diferenças

/*
Maps podem ter chaves de qualquer tipo;
Objetos tem chaves no formato de String;

Maps possuem a propriedade length pronto;
No objeto você tem que iterar pra saber qual é o "length";

Maps são mais fáceis de iterar;

Maps são Utilizados quando o valor das chaves é desconhecido;
No objeto a gente acessar um valor através de uma chave 
conhecida;

Os valores do Map tem o mesmo tipo;
No objeto não necessariamente tem valores do mesmo tipo;

*/