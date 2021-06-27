<?php
$data = ["book","pencil","NOTEBOOK","TEXT"];

function ChangeLowercase($val){
	return strtolower($val);
}
function ChangeUppercase($val){
	return strtoupper($val);
}
function ChangeFirst($val){
	$val = strtolower($val);
	return ucfirst($val);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<table border="1">
<tr><td>元の値</td><td>小文字</td><td>大文字</td><td>先頭を大文字</td></tr>
<?php
foreach($data as $value){
    // strtolower関数で小文字に変換する
	$lower = ChangeLowercase($value);
    // strotoupper関数で大文字に変換する
	$upper = ChangeUppercase($value);
    // ucfirst関数とstrtolower関数で先頭文字を大文字、2番目以降の文字を小文字にする
	$uc = ChangeFirst($value);
	
    print "<tr>";
    print "<td>{$value}</td>";
    print "<td>{$lower}</td>";
    print "<td>{$upper}</td>";
    print "<td>{$uc}</td>";
    print "</tr>";
}
?>
</table>
</body>
</html>
