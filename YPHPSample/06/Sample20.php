<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock = array("8月1日"=>"東京に行きました","8月2日"=>"今日は晴れでした","8月5日"=>"明日から休暇です","8月7日"=>"帰郷します","8月8日"=>"到着しました");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>日付</th>
<th>タイトル</th>
</tr>

<?php

while(list($name,$value)=each($stock)){
	print"<tr><td>{$name}</td><td>{$value}</td></tr>\n";
}

?>

</table>

</body>
</html>
