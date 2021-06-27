var favorites = {
	food: "カレー",
	color: "青",
	number: 7,
};
console.log(favorites.food);
console.log(favorites["color"]);
console.log(favorites.number,favorites["number"]);
favorites.sports = "サッカー";
console.log(favorites.sports);
var f = {
	error:{food: "カレー"},
	1:{color: "青"},
	2:{number: 7}
};
console.log(f[1].color)