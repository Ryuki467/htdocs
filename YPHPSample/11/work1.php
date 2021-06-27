<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>

<?php
//DB設定
$username = "root";
$password = "";
$database = "workbook";
$host = "localhost";
//DSN
$dsn = "mysql:host={$host};dbname={$database};charset=utf8";
//DB接続
$db = new PDO($dsn,$username,$password);
//結果を連想配列で取得
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//SQL
$query = "SELECT * FROM employee";
$data = $db->query($query);

?>

<table border="2">

<?php
$first = true;
while($value = $data->fetch()){
	//レコードのキーを抽出
	$keys = array_keys($value);
	//先頭レコードの場合タイトル行を表示
	if($first){
		echo"<tr bgcolor=\"#AAAAAA\">";
		foreach($keys as $key){
			echo"<th>{$key}</th>";
		}
		echo"</tr>";
		$first = false;
	}
	//実際のデータ表現
	echo"<tr>";
	//キーの配列をループして配列の全ての値を表示
	foreach($keys as $key){
		echo"<td>{$value[$key]}</td>";
	}
	echo"</tr>";
}
$db = null;
?>
</table>
</body>
</html>
