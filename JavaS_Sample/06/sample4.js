function calcTriangle(base,height){
	return base * height / 2;
}
var area = calcTriangle(30,50);
console.log(area);

var n = parseFloat("10.5");
if(!isNaN(n)){
	console.log("OK");
}else{
	console.log("NG");
}

var x = 10;
function plus(){
	x += 20;
}
plus();
console.log(x);

var y = 10;
function plus2(y){
	y += 20;
}
plus2(y);
console.log(y);

function func(){
	console.log("ABC");
}
var f = func;
console.log(f);

var w = function(w){
	console.log(w);
};
w("ABC");

(function(str){
	console.log(str);
})("こんにちは");
func();