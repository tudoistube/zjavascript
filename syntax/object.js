var members = ['Tom', 'Jerry', 'Peter'];
console.log(members[1]);
var i = 0;
while(i < members.length){
  console.log('array loop', members[i]);
  i = i + 1;
}

var roles = {
  'programmer': 'Tom',
  'designer': 'Jerry',
  'manager': 'Peter',
}
console.log(roles.designer);
for(var n in roles){
  //console.log('object => ', n, 'value => ', roles[n]);
  console.log(`object => ${n}, value => ${roles[n]}`);
}
