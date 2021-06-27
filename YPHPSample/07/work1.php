<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
</head>
<body>

<?php

$a = 4;
$b = 5;

$a_double = double($a);
$a_triple = triple($a);
$b_double = double($b);
$b_triple = triple($b);

function double($x){
	global $a;
	global $b;
	return $x * 2;
}


function triple($x){
	global $a;
	global $b;
	return $x * 3;
}

?>

<table border="1">
<tr><th>元の値</th><th>2倍</th><th>3倍</th></tr>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $a_double; ?></td>
<td><?php echo $a_triple; ?></td>
</tr>
<tr>
<td><?php echo $b; ?></td>
<td><?php echo $b_double; ?></td>
<td><?php echo $b_triple; ?></td>
</tr>

</table>

</body>
</html>