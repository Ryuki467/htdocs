var today = new Date();
console.log("今日は" + 
			today.getFullYear() + "年" +
			(today.getMonth() + 1) + "月" + 
			today.getDate() + "日です。"
);
console.log(Math.ceil(1.5));
console.log(Math.floor(1.5));
console.log(Math.round(1.5));

var numbers = [10,20,30];
numbers.push(40,50);
console.log(numbers);
var str = numbers.join(" "); //配列の結合
console.log(str);
numbers.reverse();
console.log(numbers);

var words = ["four","one","three","two","five"];
words.sort();
console.log(words);

var company = "アシアル株式会社";
var index = company.indexOf("株式会社");
var name = company.slice(0,index);
console.log(index);
console.log(name);

var message = "hello my dear friend";
var word = message.split(" "); //配列の分解
console.log(word);