<?php
	require_once("MyDB.class.php");
	//MyDBオブジェクトの生成、つまりDBへの接続処理
	$mydb = new MyDB();
	
	//更新データ
	$data = ["シニアアシスタント"];
	
	//ここにSQLを作成する
	//社員(employee)テーブルの役職(class)が「アシスタント」のレコードの役職を「シニアアシスタント」に変更するSQL
	$sql = "UPDATE employee SET class = ? WHERE class='アシスタント'";
	
	//SQL実行
	$result = $mydb->executePrepareUpdate($sql,$data);
	
	$sqi = "SELECT * FROM employee";
	$date = $mydb->executeQuery($sqi);
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク4</title>
</head>
<body>
<?php
if($result){
	echo"更新に成功しました";
}else{
	echo"更新に失敗しました";
}
?>

<table border="2">
<?php
$first = true;
while($value = $date->fetch()){
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
?>
</table>
</body>
</html>
