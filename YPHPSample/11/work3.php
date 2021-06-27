<?php
	require_once("MyDB.class.php");
	//MyDBオブジェクトの生成、つまりDBへの接続処理
	$mydb = new MyDB();
	
	//ここにSQLを作成する
	//usrテーブルからprefectureが「東京都」または「神奈川県」の「l_name」「f_name」「email」を取得
	$sql = "SELECT l_name,f_name,email FROM usr WHERE prefecture IN('東京都','神奈川県')";
	//SQLを実行して結果を取得する
	$data = $mydb->executeQuery($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>
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
?>
</table>
</body>
</html>
