var player, winner = null;
var selectedPlayer = document.getElementById("jogador-selecionado");
var selectedWinner = document.getElementById("vencedor-selecionado");
var squares = document.getElementsByClassName("quadrado");

exchangePlayer("X");

function chooseSquare(id){
    
    if(winner !== null) return;

    let square = document.getElementById(id);
    if(square.innerHTML !== '-') return;

    square.innerHTML = player;
    square.style.color = "#000";

    player = (player === "X") ? "O" : "X";
    exchangePlayer(player);
    checkWinner();
}

function exchangePlayer(value){
    player = value;
    selectedPlayer.innerHTML = player;
}

function exchangeWinner(winner_square){
    winner = winner_square.innerHTML;
    selectedWinner.innerHTML = winner;
}

function checkWinner(){
    let square1 = document.getElementById("1");
    let square2 = document.getElementById("2");
    let square3 = document.getElementById("3");
    let square4 = document.getElementById("4");
    let square5 = document.getElementById("5");
    let square6 = document.getElementById("6");
    let square7 = document.getElementById("7");
    let square8 = document.getElementById("8");
    let square9 = document.getElementById("9");

    if(checkSequencie(square1, square2, square3)){
        changeColorSquare(square1, square2, square3);
        exchangeWinner(square1);
        return;
    }

    if(checkSequencie(square4, square5, square6)){
        changeColorSquare(square4, square5, square6);
        exchangeWinner(square4);
        return;
    }

    if(checkSequencie(square7, square8, square9)){
        changeColorSquare(square7, square8, square9);
        exchangeWinner(square7);
        return;
    }

    if(checkSequencie(square1, square4, square7)){
        changeColorSquare(square1, square4, square7);
        exchangeWinner(square1);
        return;
    }

    if(checkSequencie(square2, square5, square8)){
        changeColorSquare(square2, square5, square8);
        exchangeWinner(square2);
        return;
    }

    if(checkSequencie(square3, square6, square9)){
        changeColorSquare(square3, square6, square9);
        exchangeWinner(square3);
        return;
    }

    if(checkSequencie(square1, square5, square9)){
        changeColorSquare(square1, square5, square9);
        exchangeWinner(square1);
        return;
    }

    if(checkSequencie(square3, square5, square7)){
        changeColorSquare(square3, square5, square7);
        exchangeWinner(square3);
    }
}

let checkSequencie = (sq1, sq2, sq3) => {

    let isntHifen = sq1.innerHTML !== "-";

    return (isntHifen && sq1.innerHTML === sq2.innerHTML && sq2.innerHTML === sq3.innerHTML);

}

let changeColorSquare = (sq1, sq2, sq3) => {
    sq1.style.background = "#00FF00";
    sq2.style.background = "#00FF00";
    sq3.style.background = "#00FF00";
}

function reinitialize(){
    winner = null;
    selectedWinner.innerHTML = "";

    for(let i = 1; i <= 9; i++){
        let square = document.getElementById(i);
        square.style.background = "#eee";
        square.style.color = "#eee";
        square.innerHTML = "-";
    }

    exchangePlayer("X");
}