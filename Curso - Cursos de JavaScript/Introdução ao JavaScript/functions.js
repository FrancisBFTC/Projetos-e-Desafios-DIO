
function returnEvenValues(array){
	let evenNums = [];
	for(let i = 0; i < array.length; i++){
		if (array[i] % 2 === 0) {
 			evenNums.push(array[i]);
		}else{
			console.log('${array[i]} não é par!');
		}
	}
	console.log('Os números pares são: ', evenNums);
}

let array = [1, 2, 4, 5, 7, 8];

returnEvenValues(array);

