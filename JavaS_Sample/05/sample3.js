var number = [10,20,30];
for(var i = 0; i < number.length; ){
	console.log(number[i]);
	i += 2;
}
var favorites = {
	food: "カレー",
	color: "青",
	number: 7,
};
for(var key in favorites){
	console.log(key + ':' + favorites[key]);
}
var data = [10,20,30,40,50];
var sum;
for(var j in data){
	var k = j + 1;
	if(j >=data.length-1)break;
	sum = data[j] + data[k];
	console.log(k,j,data[j]);
}
for(var j = 0; j < data.length-1; j++){
	sum = data[j] + data[j + 1];
	console.log(sum);
}