// Substitui números pares por 0
function substituiPares(vetor){
	if(!vetor) return -1;
	if(!vetor.length) return -1;

	for (let i = 0; i < vetor.length; i++) {
		if(vetor[i] === 0){
			console.log("Você já é zero!");
		} else if(vetor[i] % 2 === 0){
			console.log(`Substituindo ${vetor[i]} por 0.`);
			vetor[i] = 0;
		}
	}

	return vetor;
}

let array = [1, 3, 4, 6, 80, 33, 23, 90];

console.log(substituiPares(array));
