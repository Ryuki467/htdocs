var obj = {
	name:"よしお",
	greet:function(){console.log(this.name + "です、はじめまして");}
};
var obj1 = {
	name:"ユリ子"
};
obj.greet();
obj.greet.call(obj1);