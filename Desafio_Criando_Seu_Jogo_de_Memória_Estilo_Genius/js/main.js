let order = [];
let clickedOrder = [];
let score = 0;

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
	let colorOrder = Math.floor(Math.ramdom() * 4);
	order[order.length] = colorOrder;
	clickedOrder = [];

	for(let i in order){
		let elementOrder = createColorElement(order[i]);
		lightColor(elementOrder, Number(i) + 1);
	}
}

// Torna mais clara a próxima cor
let lightColor = (element, number) => {
	number = number * 500;
	setTimeOut(() => {
		element.classList.add('selected');
	}, number - 250);

	setTimeOut(() => {
		element.classList.remove('selected');
	});
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
		alert(`Seus pontos são ${score}\n Você acertou! Iniciando próximo nível`);
		nextLevel();
	}
}

// Função para cliques dos usuários
let click = (color) => {
	clickedOrder[clickedOrder.length] = color;
	createColorElement(color).classList.add('selected');

	setTimeOut(() => {
		createColorElement(color).classList.remove('selected');
	});

	checkOrder();
}