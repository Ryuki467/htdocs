var str = "10";
console.log(str + 10);
var num = parseInt(str);
console.log(num + 10);

var str = "A";
var num = parseInt(str);
if(isNaN(num)){
	console.log("変換失敗");
}

var encode = encodeURIComponent("こんにちは");
console.log(encode);
var decode = decodeURIComponent(encode);
console.log(decode);