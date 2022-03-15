// 1ª Exercício - Map com this

const apple = {
	value: 2
};

const orange = {
	value: 3
};

function mapComThis(array, thisArg){
	return array.map(function(item){
		return item * this.value;
	}, thisArg);
}

const nums = [1, 2, 3, 4];

console.log('this -> apple', mapComThis(nums, apple));

console.log('this -> orange', mapComThis(nums, orange));