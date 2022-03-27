var player = null;
var selectedPlayer = document.getElementById("jogador-selecionado");

exchangePlayer("X");

function chooseSquare(id){
    
    let square = document.getElementById(id);
    if(square.innerHTML !== '-') return;

    square.innerHTML = player;
    square.style.color = "#000";

    player = (player === "X") ? "O" : "X";
    exchangePlayer(player);
}

function exchangePlayer(value){
    player = value;
    selectedPlayer.innerHTML = player;
}