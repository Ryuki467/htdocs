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

$word = null;

if(isset($_POST["word"]))
$word = $_POST["word"];

$qry = "SELECT * FROM product WHERE name LIKE :word";
$word = "%" . $word . "%";
$stmt = $db->prepare($qry);
$stmt->bindParam(":word", $word);
$stmt->execute();


?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>単価</th>
</tr>

<?php
while($value = $stmt->fetch()){
	$id = $value["id"];
	$name = $value["name"];
	$price = $value["price"];
	echo"<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td></tr>\n";
}
$db = null;
?>
</table>
<form action="http://localhost/YPHPSample/Rensyu/11/Sample6.php" method="post">
<input type="text" name="word" />
<input type="submit" value="検索" />
</form>
</body>
</html>
