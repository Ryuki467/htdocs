<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
<style type="text/css">
th{
height:10px;
width:70px;
background-color:#AAAAAA;
}
td{
font-family:Verdana;
font-size:15px;
height:50px;
width:70px;
}
td.today{
font-size:25px;
font-wieght:bold;
background-color:#AAAAAA;
}
</style>
</head>
<body>

<?php

$tm = time();
$dt = getdate($tm);
$fm = mktime(0,0,0,$dt["mon"],1,$dt["year"]);
$fw = date("w", $fm);
$ld = date("t", $tm);
$wd = ["日","月","火","水","木","金","土"];
echo"<h2>".$dt["month"]. "," .$dt["year"]. "</h2>";

echo"<table border = \"2\">";

echo"<tr>";
foreach($wd as $value){
	echo"<th>{$value}</th>";
}
echo"</tr>";
echo"<tr>";

for($i=0; $i<$fw; $i++){
	echo"<td></td>";
}

for($j=1; $j<=$ld; $j++){
	if($j == $dt["mday"]){
		echo"<td class=\"today\">{$j}</td>";
	}else{
		echo"<td>{$j}</td>";
	}
	if(($j+$i)%7 == 0){
		echo"</tr><tr>";
	}
}

echo "</tr>";
echo "</table>";

?>

</table>

</body>
</html>
