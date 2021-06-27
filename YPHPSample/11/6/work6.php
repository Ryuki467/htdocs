<?php
	require_once("MyDB.class.php");
	//MyDBオブジェクトの生成、つまりDBへの接続処理
	$mydb = new MyDB();
	
	$category_name = "";
	if(isset($_POST["category_name"])){
		$category_name = $_POST["category_name"];
		$data = [$category_name];
		$sql = "SELECT b.isbn,b.title,b.price,b.publish,b.publish_date,b.category_id,c.category_name FROM books as b JOIN category as c ON b.category_id=c.category_id WHERE c.category_name = ?";
	}else{
		$data = [];
		$sql = "SELECT b.isbn,b.title,b.price,b.publish,b.publish_date,b.category_id,c.category_name FROM books as b JOIN category as c ON b.category_id=c.category_id";
	}
	
	//SQLをプリペアドステートメントで実行
	$result = $mydb->executePrepareQuery($sql,$data);
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>
<form method="POST" action="work6.php">
	<label for="category_name">カテゴリー名</label>
	<input type="text" id="category_name" name="category_name" value="<?php echo htmlspecialchars($category_name,ENT_QUOTES,"UTF-8"); ?>" />
	<input type="submit" value="送信" />
</form>
<hr/>

<?php if($result && $result->rowCount() > 0){ ?>
<table border="2">
<?php
$first = true;
while($value = $result->fetch()){
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
	//実際のデータの表現
	echo"<tr>";
	//キーの配列をループして配列の全ての値を表示
	foreach($keys as $key){
			echo"<td>{$value[$key]}</td>";
	}
	echo"</tr>";
}
?>
</table>
<?php
}else{
	echo"<div>データはありません</div>";
}
?>
</body>
</html>
