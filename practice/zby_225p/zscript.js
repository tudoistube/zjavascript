/*
...216p.select 태그의 name 속성값을 가져옴.

document.getElementById('form').zselect.onchange = function() {
  location.href = document.getElementById('form').zselect.value;
}
...219p.
*/

var lang = document.querySelector('html').lang;
console.log(lang);
var opt;

if(lang === 'ko')
{
  opt = document.querySelector('option[value="index.html"]');
} else if (lang === 'en') {
  opt = document.querySelector('option[value="index-en.html"]');
} else if (lang === 'ja') {
  opt = document.querySelector('option[value="index-jp.html"]');
}
opt.selected = true;


document.getElementById('form').zselect.onchange = function() {
  location.href = document.getElementById('form').zselect.value;
}
