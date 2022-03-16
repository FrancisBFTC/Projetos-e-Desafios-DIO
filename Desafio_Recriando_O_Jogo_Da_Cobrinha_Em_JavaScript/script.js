let canvas   = "";
let menuGame = "";
let context  = "";
let divOver  = "";
let game     = "";
let menu     = "";
let input    = "";
let divLevel = "";

let direction = "right";
let box = 32;
let pontuacao = 0;

let snake = [];


snake[0] = {
	x: 8 * box,
	y: 8 * box
};

let food = {
	x: Math.floor(Math.random() * 15 + 1) * box,
	y: Math.floor(Math.random() * 15 + 1) * box
}


function createBG(){
	context.fillStyle = "black";
	context.fillRect(0, 0, 16 * box, 16 * box);
}

function createSnake(){
	for(let i = 0; i < snake.length; i++){
		context.fillStyle = "green";
		context.fillRect(snake[i].x, snake[i].y, box, box);
	}
}

function createFood(){
	context.fillStyle = "red";
	context.fillRect(food.x, food.y, box, box);
}

function update(event){
	if(event.keyCode == 37 && direction !== "right")
		direction = "left";

	if(event.keyCode == 38 && direction !== "up")
		direction = "down";

	if(event.keyCode == 39 && direction !== "left")
		direction = "right";

	if(event.keyCode == 40 && direction !== "down")
		direction = "up";
}

function startGame(){


	if(snake[0].x > 15 * box && direction === "right")
		snake[0].x = 0;

	if(snake[0].x < 0 && direction === "left")
		snake[0].x = 16 * box;

	if(snake[0].y > 15 * box && direction === "up")
		snake[0].y = 0;

	if(snake[0].y < 0 && direction === "down")
		snake[0].y = 16 * box;

	for(let i = 1; i < snake.length; i++){
		if(snake[0].x === snake[i].x && snake[0].y === snake[i].y){
			
			clearInterval(game);
			createMenu('Play Again');

		}
	}

	createBG();
	createSnake();
	createFood();

	let snakeX = snake[0].x;
	let snakeY = snake[0].y;

	switch(direction){
		case "right":
			snakeX += box; break;
		case "left":
			snakeX -= box; break;
		case "up":
			snakeY += box; break;
		case "down":
			snakeY -= box; break;
	}

	if(snakeX !== food.x || snakeY !== food.y){
		snake.pop();
	}
	else{
		food.x = Math.floor(Math.random() * 15 + 1) * box;
		food.y = Math.floor(Math.random() * 15 + 1) * box;
		pontuacao++;
		input.value = pontuacao;
	}


	let newHead = {
		x: snakeX, 
		y: snakeY
	};

	snake.unshift(newHead);
}

function createMenu(text){

	menu = document.createElement('div');
	menu.setAttribute('id', 'menu-game');
	const body = document.getElementsByTagName('body')[0];
	body.appendChild(menu); 

	menuGame = document.getElementById('menu-game');
	divOver = document.createElement('div');
	let playTheGame;
	let textButton;

	if(text === 'Play Again'){
		document.getElementsByTagName('body')[0].removeChild(canvas);

		const taskLabel = document.createElement('label');
		const textNode = document.createTextNode("Game Over");

		playTheGame = document.createElement('button');
		textButton = document.createTextNode(text);

		taskLabel.appendChild(textNode);
		divOver.appendChild(taskLabel);
		divOver.classList.add('game-over');

		playTheGame.addEventListener('click', tryPlayAgain);

		divLevel.innerHTML = `<h2 style='margin-right: 25%;'>SUA PONTUACAO É: ${pontuacao}</h2>`;
		pontuacao = 0;

	}
	else{
		playTheGame = document.createElement('button');
		textButton = document.createTextNode(text);

		playTheGame.addEventListener('click', playGame);

		divOver.appendChild(playTheGame);

	}

	menuGame.appendChild(divOver);
	menuGame.appendChild(playTheGame);
	menuGame.classList.add('panel-menu');

	playTheGame.appendChild(textButton);
	playTheGame.setAttribute('id', 'play-again');

}

tryPlayAgain = () => location.reload();


function playGame(){
	const body = document.getElementsByTagName('body')[0];

	document.getElementsByTagName('body')[0].removeChild(menu);

	divLevel = document.createElement('div');
	divLevel.setAttribute('id', 'level-div');

	const labelText = document.createElement('label');
	const description = document.createTextNode('PONTOS:');
	labelText.appendChild(description);
	divLevel.appendChild(labelText);

	const inputText = document.createElement('input');
	inputText.setAttribute('type', 'text');
	inputText.setAttribute('readonly', '');
	inputText.classList.add('input-class');
	divLevel.appendChild(inputText);

	body.appendChild(divLevel);
	input = document.getElementsByClassName('input-class')[0];

	const canvElement = document.createElement('canvas');
	canvElement.setAttribute('id', 'snake');
	canvElement.setAttribute('width', '512');
	canvElement.setAttribute('height', '512');
	body.appendChild(canvElement);


	canvas = document.getElementById('snake');
	context = canvas.getContext("2d");

	document.addEventListener("keydown", update);
	game = setInterval(startGame, 100);
}

createMenu('Play Game');