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

let shuffleOrder = () => {
	let colorOrder = Math.floor(Math.ramdom() * 4);
	order[order.length] = colorOrder;
	clickedOrder = [];

	for(let i in order){
		
	}
}