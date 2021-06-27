funa();
console.log(s);
function funa(){
	s = "ABC";
	console.log(s);
}
var str = "グローバル"
function fun1(){
	var str = "fun1";
	console.log(str);
}
function fun2(){
	var str = "fun2";
	console.log(str);
}
fun1();
fun2();
console.log(str);

var global = 0;
function func(){
	global++;
}
for(var i=0; i<10; i++){
		func();
}
console.log(global);