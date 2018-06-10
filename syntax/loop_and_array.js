console.log('A');
console.log('B');

var i = 0;
while(i < 2){
  console.log('C1');
  console.log('C2');
  var a = 0;
  a = a + 1;
  i = i + 1;
  console.log('a, i : ', a, i);
}

console.log('D');

var number = [1,400,12,34];
var i = 0;
var total = 0;
while(i < number.length){
  total = total + number[i];
  i = i + 1;
}
console.log(`total 은 ${total} 입니다.`);
