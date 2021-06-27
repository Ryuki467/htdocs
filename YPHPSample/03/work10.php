<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
</head>
<body>

<?php

$weight = 52.5;
$height = 1.65;


//BMI指数を求める BMI指数 = 体重kg / （身長m * 身長m）
$BMI= $weight / ($height * $height);

?>

<table border="1">
	<tr>
		<td>身長</td>
		<td>体重</td>
		<td>BMI</td>
	</tr>
	<tr>
		<td><?php echo $height; ?> m</td>
		<td><?php echo $weight; ?> m</td>
		<td><?php echo $BMI; ?></td>
	</tr>

</table>

</body>
</html>
