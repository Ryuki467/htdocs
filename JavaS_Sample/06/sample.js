function sayHello(){
	console.log("こんにちは");
}
sayHello();
function CallName(name){
	console.log(name + "さん、こんにちは!");
}
CallName("佐藤");
function calc(x){
	var num = 0;
	for(var i=1; i<=x; i++){
		num += i;
	}
	return num;
}
console.log(calc(100));