/**
 *
 */

console.log("__dirname :", __dirname);
console.log("__filename :", __filename);

/*
console.log("node.js 코드1 입니다");
//...register action to be done immediately after one accident completes.
setImmediate(function(){
	console.log("Immediate 동작 1");
});

console.log("node.js 코드2 입니다");
//...register action to be done immediately after one accident completes.
var a1 = setImmediate(function(){
	console.log("Immediate 동작 2");
});

console.log("node.js 코드 입니다");

//...remove the action to be done immediately after one accident completes.
clearImmediate(a1);
*/


var a1 = 0;
var a2 = setInterval(function(){
	console.log("setInterval 계속 동작");
	a1++;
	console.log("a1 :", a1);
	if(a1 >= 5){
		clearInterval(a2);
	}
}, 1000);



var a3 = setTimeout(function(){
	console.log("setTimeout 한번만 동작");
}, 6000);

setTimeout(function(){
	console.log("clearTimeout... ");
	clearTimeout(a3);
}, 7000);

console.log("작업이 모두 완료되었습니다");
