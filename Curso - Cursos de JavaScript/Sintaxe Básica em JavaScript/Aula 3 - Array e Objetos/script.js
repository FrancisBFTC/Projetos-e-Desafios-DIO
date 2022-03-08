// O que são vetores e arrays
// Como declarar um array, objetos e seus métodos

console.log("Array de 3 elementos");
let array = ['string', 1, true];
console.log(array);

//pode guardar vários tipos de dados
console.log("Array de 7 elementos, retornando índice 2");
let array0 = ['string', 1, true, ['array1'], ['array2'], ['array3'], ['array4']];
console.log(array[2]);

// Métodos para Arrays
// Exemplo do ForEach()
console.log("Exemplo de ForEach de todo o array");
array0.forEach(function(item, index){
    console.log('Item: ', item, ', Índice: ', index);
});

// Exemplo do push()
console.log("Adicionando novo item no final com push()");
array0.push('novo item');
console.log(array0);

// Exemplo do pop()
console.log("Removendo o novo item no final com pop()");
array0.pop();
console.log(array0);

// Exemplo de unshift()
console.log("Adicionando o novo item no inicio com unshift()");
array0.unshift('novo item');
console.log(array0);

// Exemplo de shift()
console.log("Removendo o novo item no inicio com shift()");
array0.shift();
console.log(array0);

// Exemplo de indexOf()
console.log("Retornando índice de um valor com indexOf()");
console.log('"', array0[0], 'esta no índice', array0.indexOf('string'), '"');
console.log('"', array0[2], 'esta no índice', array0.indexOf(true), '"');

// Exemplo de splice() 1
console.log("substituindo 3 itens com splice()");
array0.splice(0, 3, 'novastring', 2, false);
console.log(array0);

// Exemplo de splice() 2
console.log("removendo 2 itens com splice()");
array0.splice(0, 2);
console.log(array0);

// Exemplo de slice()
console.log("Pegando 3 primeiros itens de array0 com slice()");
let new_array = array0.slice(0, 3);
console.log(new_array);

// Exemplo de Objetos
console.log("Criando uma estrutura/objeto do Computador com várias propriedades");
var Computador = {
    nome: 'computador',
    marca: 'semp toshiba',
    stat: true,
    valor: 1000,
    gabinete:{
        comprimentoCm: 60,
        larguraCm: 30,
        alturaCm: 50,
        cor: 'preto'
    },
    perifericos: {
        disp1: {
            nome: 'teclado',
            modelo: 'qwerty',
            driver: 3.40
        },
        disp2: 'mouse',
        disp3: 'monitor',
        disp4: 'placa-mãe',
        disp5: 'processador',
        disp6: 'memoriaRAM',
        disp7: 'Disco Rígido',
        disp7: 'Chip da BIOS'
    } 
}
console.log('Objeto Completo: ', Computador);
console.log('marca do', Computador.nome, ' : ', Computador.marca);
console.log('Altura do Gabinete : ', Computador.gabinete.alturaCm);

// Desestruturação do Objeto Computador
let hardware = Computador.perifericos;
console.log('Dispositivo 4 :', hardware.disp4);
console.log('Dispositivo 1 =>\n', 
                'Nome :', hardware.disp1.nome,
                '\n Modelo :', hardware.disp1.modelo,
                '\n Driver :', hardware.disp1.driver);

// Outra forma de desestruturação do Objeto
console.log("Desestruturando objetos através de {}");
var {nome, marca, stat, gabinete} = Computador;

console.log('Nome :', nome);
console.log('Marca :', marca);
console.log('Funciona?', stat);
console.log('Cor :', gabinete.cor);
