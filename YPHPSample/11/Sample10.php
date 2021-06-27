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

$qry = "SELECT * FROM product ";

if(isset($_POST["sort"]) && $_POST["sort"] == "desc")
$qry = $qry . "WHERE price<=30";
$stmt = $db->prepare($qry);
$stmt->execute();

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>在庫状況</th>
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
<form action="http://localhost/YPHPSample/Rensyu/11/Sample10.php" method="post">
<input type="radio" name="sort" value="asc" <?php if(!isset($_POST["sort"]) || $_POST["sort"] != "desc") echo"checked"; ?> />全体表示
<input type="radio" name="sort" value="desc" <?php if(isset($_POST["sort"]) && $_POST["sort"] == "desc") echo"checked"; ?> />僅少表示
<input type="submit" value="表示" />
</form>
</body>
</html>
