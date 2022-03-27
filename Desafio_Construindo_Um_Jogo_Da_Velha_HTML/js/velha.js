var player = null;
var selectedPlayer = document.getElementById("jogador-selecionado");

exchangePlayer("X");

function chooseSquare(id){
    let square = document.getElementById(id);

    square.innerHTML = player;
    square.style.color = "#000";
}

function exchangePlayer(value){
    player = value;
    selectedPlayer.innerHTML = player;
}