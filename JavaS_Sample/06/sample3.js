function sayHello(){
	console.log("こんにちは");
}
var f = sayHello;
f();
var f = function s(){
	console.log("こんばんは");
};
f();
var f = function(){
	console.log("おはようございます！");
};
f();
(function (name) {
	console.log(name + "さん、こんにちは");
})("よしお");
var w = function plus(){
	console.log(1000);
};
sayHello();
w();
//以降エラー
plus();
s();