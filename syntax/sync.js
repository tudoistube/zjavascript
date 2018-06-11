var fs = require('fs');

//readFileSync.
/*
console.log(1);
var result = fs.readFileSync('syntax/syncSample.txt', 'utf8');
console.log(result);
console.log(2);
*/

//...Async.
console.log(1);
fs.readFile('syntax/syncSample.txt', 'utf8', function(err, result){
  console.log(result);
});
console.log(2);
