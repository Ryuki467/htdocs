<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>
<?php
$dbname = "sqlite:pdb.db";
$usrname = "";
$psword = "";

$db = new PDO($dbname,$usrname,$psword);
$db->exec("DROP TABLE IF EXISTS product");
$db->exec("CREATE TABLE product(id INTEGER PRIMARY KEY, name STRING, price INTEGER)");

$qry = [
	"INSERT INTO product (name, price) VALUES('鉛筆',80)",
	"INSERT INTO product (name, price) VALUES('消しゴム',50)",
	"INSERT INTO product (name, price) VALUES('定規',200)",
	"INSERT INTO product (name, price) VALUES('コンパス',300)",
	"INSERT INTO product (name, price) VALUES('ボールペン',100)"
];

foreach($qry as $value){
	$db->exec($value);
}

$qry = "SELECT * FROM product";
$data = $db->query($qry);

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>単価</th>
</tr>

<?php
while($value = $data->fetch()){
	$id = $value["id"];
	$name = $value["name"];
	$price = $value["price"];
	echo"<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td></tr>";
}
$db = null;
?>
</table>
</body>
</html>
