let order = [];
let clickedOrder = [];
let score = 0;
let isTiming = false;

// 0 - verde
// 1 - vermelho
// 2 - amarelo
// 3 - azul

const BLUE_DIV   = document.querySelector('.blue');
const RED_DIV    = document.querySelector('.red');
const GREEN_DIV  = document.querySelector('.green');
const YELLOW_DIV = document.querySelector('.yellow');

// Esta função cria ordem aleatória de cores
let shuffleOrder = () => {
	let colorOrder = Math.floor(Math.random() * 4);
	order[order.length] = colorOrder;
	clickedOrder = [];

	for(let i in order){
		let elementOrder = createColorElement(order[i]);
		lightColor(elementOrder, Number(i) + 1);
	}
}

// Torna mais clara a próxima cor
let lightColor = (element, number) => {
	//number = number * 500;

	setTimeout(() => {
		element.classList.add('selected');
	}, 500);

	setTimeout(() => {
		element.classList.remove('selected');
		isTiming = true;
	}, 1000);
	
	/*
	let i = 0;

	const timer = setInterval(function() {
		  if(i === 0)
		  	element.classList.add('selected');

		  if (i >= 5) {
		  	element.classList.remove('selected');
		  	isTiming = true;
		    clearInterval(timer)
		  }

		  i++
		  console.log(i)
	}, 1000);

	while(isTiming == false){

	}
	*/

}

// Identifica se os botões clicados é a mesma ordem do jogo
let checkOrder = () => {
	for(let i in clickedOrder){
		if(clickedOrder[i] != order[i]){
			gameover();
			break;
		}
	}

	if(clickedOrder.length == order.length){
		alert(`Seus pontos são ${score}\nVocê acertou! Iniciando próximo nível`);
		nextLevel();
	}
}

// Função para cliques dos usuários
let click = (color) => {
	clickedOrder[clickedOrder.length] = color;
	createColorElement(color).classList.add('selected');

	setTimeout(() => {
		createColorElement(color).classList.remove('selected');
		checkOrder();
	}, 250);
}

// Função que retorna a cor
let createColorElement = (color) => {
	switch(color){
		case 0: return GREEN_DIV;
		case 1: return RED_DIV;
		case 2: return YELLOW_DIV;
		case 3: return BLUE_DIV;
	}
}

// Função que vai para o próximo nível
let nextLevel = () => {
	score++;
	shuffleOrder();
}

// Função para final de jogo caso perdeu
let gameover = () => {
	alert(`Seus pontos são ${score}\nVocê perdeu! :(\n Reinicie o jogo em Ok`);
	order = [];
	clickedOrder = [];

	playGame();
}

// Função para iniciar o jogo
let playGame = () => {
	alert("Bem-vindo ao Gênius! Iniciando jogo");
	score = 0;

	nextLevel();
}

// Eventos dos botões para as cores
GREEN_DIV.onclick = () => click(0);
RED_DIV.onclick = () => click(1);
YELLOW_DIV.onclick = () => click(2);
BLUE_DIV.onclick = () => click(3);

playGame();