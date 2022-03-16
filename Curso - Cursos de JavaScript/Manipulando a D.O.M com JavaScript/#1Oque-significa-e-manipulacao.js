// O que é D.O.M?

/*
 	Significa Document Object Model e é a estrutura hierárquica da página HTML.

 	Na página possui uma árvore hierárquica cujo objeto principal é o "Document",
 	ele aponta para o nó raiz "HTML", este nó vai apontar para outros nós filhos 
 	que são "HEAD" e "BODY", no qual são irmãos. HEAD terá outros nós como META,
 	TITLE, etc.. e BODY poderá terá outros nós filhos como H1, H2, H3, A, P, I, etc...
*/

// O que é B.O.M?

/*
	Significa Browser Object Model e é a estrutura do navegador, o pai do "D.O.M".

	Como B.O.M é o pai do D.O.M, logo ele aponta para o objeto Document que terá a
	estrutura html da página. Porém o primeiro objeto raiz do B.O.M é o "Window",
	o Window (janela), vai apontar para seus filhos: Document (documento), History
	(histórico), screen (tela), navigator (navegador), etc... Então cada um destes
	objetos terão estruturas e propriedades específicas de todo o Browser.
*/

// Métodos de manipulação da D.O.M
// Selecionando os elementos de uma página

// Para selecionar o elemento abaixo pelo Id...
// <h1 id="titulo">Meu titulo</h1>
// basta:

document.getElementById('titulo');

// Para selecionar um dos elementos abaixo pela tag...
//<li>Item 1</li>
//<li>Item 2</li>
// basta:

document.getElementsByTagName('li');    // retorna um Array
document.getElementsByTagName('li')[0]; // retorna um 1ª item
document.getElementsByTagName('li')[1]; // retorna um 2ª item

// Para selecionar o elemento abaixo pela classe...
/*
<section class="MinhaClasse">
	...Meu conteúdo
</section>
<section class="MinhaClasse">
	...Outro conteúdo
</section>
*/
// basta:
 
document.getElementsByClassName('MinhaClasse'); // retorna um Array
document.getElementsByClassName('MinhaClasse')[0]; // retorna 1ª section
document.getElementsByClassName('MinhaClasse')[1]; // retorna 2ª section

// Para selecionar elementos com mais classes...
/*
<div class="classe1 classe2"></div>
*/
// basta:

document.querySelectorAll('.classe1 .classe2');

// Para selecionar elementos combinando tags e classes...
/*
<li class="opcao">Opcao 1</li>
<li class="opcao">Opcao 2</li>
<li class="opcao">Opcao 3</li>
*/
// basta:

document.querySelectorAll('li .opcao');


// Métodos para adicionar e deletar elementos

document.createElement(element);     // Cria um novo elemento HTML
document.removeChild(element);       // Remove um elemento
document.appendChild(element);       // Adiciona um elemento
document.replaceChild(novo, velho);  // Substitui um elemento


// Outros exemplos

const taskContainer = document.createElement('div');
const newTask = document.createElement('input');
const taskLabel = document.createElement('label');
const taskDescriptionNode = document.createTextNode(description);

newTask.setAttribute('type', 'checkbox');
newTask.setAttribute('name', description);
newTask.setAttribute('id', description);

taskLabel.setAttribute('for', description);
taskLabel.appendChild(taskDescriptionNode);

taskContainer.classList.add('task-item');
taskContainer.appendChild(newTask);
taskContainer.appendChild(taskLabel);

taskList.appendChild(taskContainer);
