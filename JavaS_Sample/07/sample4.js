var item1 = {
	price: 1000
};
var item2 = {
	price:2000,
	calcTax:function(){
		console.log(this.price * 0.05);
	}
};
item2.calcTax();
item2.calcTax.call(item1);

var array = ["A","B","C"];
var str = array.join("/");
var result = str.split("/");
console.log(array);
console.log(result);

str = "money monday month common";
var words = str.match(/mon/g);
console.log(words.length);

str = "friday saturday sunday";
rep = str.replace(/day$/g,"flower");
console.log(rep);