// -----------------------------------------------------
// Declarar Strings e concatenação por método


let nome = 'Wenderson';

let sobrenome = 'Anjos';

let concatenado = nome.concat(sobrenome);

console.log(concatenado); // Concatena String
console.log(concatenado.length) // Tamanho da String

// -----------------------------------------------------


// -----------------------------------------------------
// Diferença entre Objetos e Strings
// O Objeto contém métodos dentro dele, que podem ser vistos
// no console do navegador pela aba "proto", e também contém
// um índice completo de caracteres, no entanto, as Strings
// primitivas também podem "acessar" estes métodos.

let exemplo = "oratoroeu"; // É uma String
console.log(typeof(exemplo));
console.log(exemplo);
let exemplo1 = new String("oratoroeu"); // É um objeto
console.log(typeof(exemplo1));
console.log(exemplo1);


// -----------------------------------------------------


// -----------------------------------------------------
// Strings também podem ser iteráveis...
// e outras formas de concatenação.

// Template Strings
console.log(`ÍNDICES : ${nome[0]} ${nome[1]} ${nome[2]}`);

// Concatenação tradicional
concatenado = nome + " " + sobrenome;
console.log(concatenado);

// tradicional com quebra de linha
concatenado = nome + "\n\n" + sobrenome;
console.log(concatenado);

// Template Strings em variável
concatenado = `${nome} ${sobrenome}`;
console.log(concatenado);

// Template Strings pulando linha
concatenado = `

${nome}
${sobrenome}`;

console.log(concatenado);

// Concatenação tradicional exibindo aspas
// É preciso usar escape
concatenado = "\"valor\"";
console.log(concatenado);

// -----------------------------------------------------


// -----------------------------------------------------
// Métodos para manipular Strings

// Faz uma separação de cada caractere
let frase = "Olá, como vai?";
console.log(frase.split(""));

// Faz uma separação apenas entre espaços
console.log(frase.split(" "));

// identifica se a frase contém uma palavra
console.log(frase.includes("como"));

// identifica se a frase começa com uma letra
console.log(frase.startsWith("O"));
console.log(frase.startsWith("P"));


// identifica se a frase termina com uma letra
console.log(frase.endsWith("?"));

// substitui um caractere por outro
// O código abaixo não substitui
frase.replace(',', '!');
console.log(frase);

// Mas... isto sim! Eu preciso guardar em outra variável
let modificada = frase.replace(',', '!');
console.log(modificada);


// -----------------------------------------------------