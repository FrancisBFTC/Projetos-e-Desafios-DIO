const fs = require('fs');
const path = 'hello.txt';
//const buffer = Buffer.from('Hello World!');
//fs.writeFile(path, 'Hello, world!', (err) => {
//	if (err) throw err;
//});

//fs.readFile(path, 'binary', (err, file) => {
//	if(err){
//		console.log(err);
//	}
//	console.log(file);
//});

/*
fs.access('hello.txt', fs.constants.F_OK & fs.constants.R_OK & fs.constants.W_OK, (err) => {
	if(err){
		console.error('no access');
	}
	console.log('has access');
});
*/

/*
process.on('uncaughtException', function(err){
	if(err instanceof TypeError){
		throw "Type error";
	} else if(err instanceof ReferenceError){
		throw "Reference error";
	} else if(err instanceof RangeError){
		throw "Range error";
	} else {
		throw "Unknown error";
	}
});

null.length();
*/

/*
function cb1(){
	console.log('look here');
}

function cb2(){
	console.log('no, look here');
}

process.nextTick(cb2);
console.log('no-no, look here');
process.nextTick(cb1);
*/

/*
const buf1 = Buffer.from('Hel');
const buf2 = Buffer.from('rld!!!');
const buf3 = Buffer.from('lo, wo');
const newBuffer = Buffer.concat([buf1, buf3, buf2]);
const newBuffer1 = newBuffer.slice(2);
if(newBuffer1.length > 0){
	console.log(newBuffer1.toString(undefined, 5));
}
*/
/*
const buf1 = Buffer.from('Hello, world!');
const buf2 = Buffer.from('Hello, world!!!');
const cmp = buf1.compare(buf2);
if(cmp < 0){
	const json = buf1.toJSON(buf1);
	console.log(json);
} else {
	const json = buf2.toJSON(buf2);
	console.log(json);
}*/
/*
const buf1 = Buffer.alloc(5);
const buf2 = Buffer.alloc(10);
buf1.write("1111111111");
buf2.write("11111");
const str1 = buf1.toString();
const str2 = buf2.toString();
console.log(str1);
console.log(str2);
if(str1 < str2){
	console.log("buf1 < buf2");
} else if(str1 > str2){
	console.log("buf1 > buf2");
} else {
	console.log("buf1 = buf2");
}
*/

const axios = require('axios');
axios.post(
	'http://www.example.com/action',
	{form: {key: 'value'}}
);