let order = [];
let clickedOrder = [];
let score = 0;
let isTiming = false;

// Novas variáveis globais: contadores para player
// e sequência de cores
var number = 0;
var counter = 0;
var countPlayer = 0;
var music_back = 0;

// Lista de músicas disponíveis no diretório
var arrayPlayer = [
 	'Christina.Aguilera-feel.this.moment',
	'psyborgcorp-mymechatronics',
	'rammstein-ich.tuh.dir.weh'
];

// Array para eventos dos players
var musicPlayer = [];

// Constantes dos elementos HTML
const BLUE_DIV   = document.querySelector('.blue');
const RED_DIV    = document.querySelector('.red');
const GREEN_DIV  = document.querySelector('.green');
const YELLOW_DIV = document.querySelector('.yellow');

// Constante do H3 para nome da música
const nameMusic = document.getElementById('name-music');


// Esta função cria ordem aleatória de cores
let shuffleOrder = () => {
	let colorOrder = Math.floor(Math.random() * 4);
	order[order.length] = colorOrder;
	clickedOrder = [];

	for(let i in order){
		let elementOrder = createColorElement(order[i]);
		let classElement = getClassElement(order[i]);
		lightColor(elementOrder, classElement);
	}

}

// Torna mais clara a próxima cor
let lightColor = (element, classElement) => {
	number = number + 250;

	// Aqui teve um bug e foi corrigido, cada cor deve piscar por vez!
	setTimeout(() => {
			element.classList.add(classElement);
	}, number);

	number = number + 250;

	setTimeout(() => {
		element.classList.remove(classElement);
		counter++;
		if(counter === order.length){
			counter = 0;
			number = 0;
		}
	}, number);

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
	createColorElement(color).classList.add(getClassElement(color));

	setTimeout(() => {
		createColorElement(color).classList.remove(getClassElement(color));
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

let getClassElement = (color) => {
	switch(color){
		case 0: return 'selected-green';
		case 1: return 'selected-red';
		case 2: return 'selected-yellow';
		case 3: return 'selected-blue';
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

	// Inicia música específica no Array e exibe o nome
	setInterval(() => {
	 	musicPlayer[countPlayer].play();
	 	nameMusic.innerHTML = arrayPlayer[countPlayer]
	 				.replace('-', ' - ')
	 				.replaceAll('.', ' ') + ' reproduzindo...';
	}, 100);

	alert("Let´s go The Genius! Vamos dançar e memorizar?");
	score = 0;

	nextLevel();
}

// Função para adicionar músicas na lista e evento de terminado
// É tocado 3 músicas repetidamente
let initMusics = () => {

	for(let i = 0; i < arrayPlayer.length; i++){
		musicPlayer.push(document.getElementById(arrayPlayer[i]));
		
		musicPlayer[i].addEventListener('ended', function(){
	 		musicPlayer[i].currentTime = 0;
	 		musicPlayer[i].pause();
	 		countPlayer++;
	 		
	 		if(countPlayer === arrayPlayer.length) countPlayer = 0;
	 	});
	}

}

// Eventos dos botões para as cores
GREEN_DIV.onclick = () => click(0);
RED_DIV.onclick = () => click(1);
YELLOW_DIV.onclick = () => click(2);
BLUE_DIV.onclick = () => click(3);

// Chama a função para adicionar músicas e iniciar jogo
initMusics();
playGame();

