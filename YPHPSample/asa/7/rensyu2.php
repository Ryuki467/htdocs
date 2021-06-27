<?php
$data = ["山田","佐藤","鈴木","井上"];

// ここで配列内の各要素を「,」区切りで連結する処理を加える
$result = getJoin($data);

function getJoin($data){
	return implode(",",$data);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<div>結合した文字列：<?php echo $result; ?></div>
</body>
</html>
