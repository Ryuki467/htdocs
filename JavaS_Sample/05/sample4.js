var tickets = [290,296,299,301,305];
for(var i = 0; i < tickets.length; i++){
	if(tickets[i] >= 300){
		break;
	}
	console.log(tickets[i]);
}
console.log("終了");

var tickets = ["指定席","自由席","指定席","自由席","指定席"];
for(var j = 0; j < tickets.length; j++){
	if(tickets[j] >= "自由席"){
		continue;
	}
	console.log(j + ":" + tickets[j]);
}
console.log("終了");
var x = "1";
if(x == 1)console.log(100);
else console.log(0);
if(x === 1)console.log(100);
else console.log(0);