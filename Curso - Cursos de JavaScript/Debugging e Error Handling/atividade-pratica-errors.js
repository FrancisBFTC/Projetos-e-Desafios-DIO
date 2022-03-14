// Ativida prática manipulando erros

function validationArgs(array, number){
	let myError;
	try {
		if(!array && !number) throw new ReferenceError('Missing Parameters.');
		if(typeof(array) !== 'object') throw new TypeError('array is not Object Type');
		if(typeof(number) !== 'number') throw new TypeError('number is not Number Type');
		if(array.length !== number) throw new RangeError('Invalid Array size.');

		return array;
	}
	catch(e){
		if(e instanceof ReferenceError){
			console.log("This error is a ReferenceError");
			myError = new Error(e.message);
			myError.name = "ReferenceError";
		} else if(e instanceof TypeError){
			console.log("This error is a TypeError");
			myError = new Error(e.message);
			myError.name = "TypeError";
		} else if(e instanceof RangeError){
			console.log("This error is a RangeError");
			myError = new Error(e.message);
			myError.name = "RangeError";
		}else{
			myError = new Error("Occurr a Error type unexpect: " + e);
		}
	}
	finally{
	    if(myError)
	    	throw myError;
	    else 
	    	console.log("Apresentando dados...");
	}
}

console.log(validationArgs());