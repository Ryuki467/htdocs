var date = "2013年3月31日";
var result = date.match(/[0-9]+/g);
console.log(result);

var message = "This is a pen";
result = message.replace(/is/g,"at"); //置き換え
console.log(result);