// Variáveis que armazenam os elementos para manipulação

var currentNumberWrapper = document.getElementById('currentNumber');
var buttonSub = document.getElementById('ButtonSub');
var buttonAdd = document.getElementById('ButtonAdd');
var currentNumber = 0;

// Adicionando eventos para os 2 botões
buttonAdd.addEventListener("click", increment, false);
buttonSub.addEventListener("click", decrement, false);

// Função de incremento do valor pelo botão de adicionar
function increment(){
	buttonEnabled(buttonSub, true);
	currentNumber = currentNumber + 1;
	
	if(currentNumber <= 10){
		currentNumberWrapper.innerHTML = currentNumber;
	}else{
		currentNumber = 10;
		buttonEnabled(buttonAdd, false);
	}

	if(currentNumber > 0)
		currentNumberWrapper.style.color = 'green';
	if(currentNumber === 0)
		currentNumberWrapper.style.color = 'white';
}

// Função de decremento do valor pelo botão de subtrair
function decrement(){
	buttonEnabled(buttonAdd, true);
	currentNumber = currentNumber - 1;
	if(currentNumber >= -10){
		currentNumberWrapper.innerHTML = currentNumber;
	}else{
		currentNumber = -10;
		buttonEnabled(buttonSub, false);
	}

	if(currentNumber < 0)
		currentNumberWrapper.style.color = 'red';
	if(currentNumber === 0)
		currentNumberWrapper.style.color = 'white';
}

// Função que altera a cor do botão para habilitado ou desabilitado
function buttonEnabled(but, isEnabled){
	if(!isEnabled){
		but.style.backgroundColor = 'lightgray';
		but.style.color = 'gray';
		but.style.borderColor = 'gray';
	}else{
		but.style.backgroundColor = '#F1D6D6';
		but.style.color = 'blue';
		but.style.borderColor = 'blue';
	}
}