var obj = {
	name:"よしお",
	greet:function(age,from){
		console.log(this.name + "です、はじめまして");
		console.log("年齢は" + age + "歳です");
		console.log("出身地は" + from + "です");
	}
};
var obj1 = {
	name:"ユリ子"
};
obj.greet(29,"日本");
obj.greet.call(obj1,6,"アメリカ");
var param = [6,"アメリカ"];
obj.greet.apply(obj1,param);