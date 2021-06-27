<!DOCTYPE html>
<html>
<head>
<title>ワーク17</title>
<style type = "text/css">
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
	font-weight:bold;
	background-color:#AAAAAA;
}
</style>
</head>
<body>

<?php
if(isset($_GET['ym'])){
	$ym = $_GET['ym'];
}else{
	$ym = date("Y-m");
}
$today = getdate();

$tm = strtotime($ym);
$dt = getdate($tm); //現在時刻
$fm = mktime(0,0,0,$dt["mon"],1,$dt["year"]); //月初
$fw = date("w",$fm);//月曜日
$ld = date("t",$tm);//月終日
$le = mktime(0,0,0,$dt["mon"],$ld,$dt["year"]); //月最終日
$lw = date("w",$le); //月最終日

$lastym = date("Y-m",strtotime("-1 month",$tm)); //前月
$nextym = date("Y-m",strtotime("+1 month",$tm)); //翌月

$wd = ["日","月","火","水","木","金","土"];

echo"<h2>".$dt["month"]. "," .$dt["year"]."</h2>";
echo"<table border =\"2\">";
echo"<tr>";
echo"<td><a href=\"work17.php?ym={$lastym}\">前月</a></td>";
echo"<td colspan=\"5\" align=\"center\"><a href=\"work17.php\">今月</a></td>";
echo"<td><a href=\"work17.php?ym={$nextym}\">翌月</a></td>";
echo"</tr>";

echo"<tr>";
foreach($wd as $value){
	echo "<th>{$value}</th>";
}
echo"</tr>";
echo"<tr>";
for($i=0; $i<$fw; $i++){
	echo "<td></td>";
}
for($j=1; $j<=$ld; $j++){
	if($today["mday"] == $j && $today["mon"] == $dt["mon"] && $today["year"] == $dt["year"]){
		echo"<td class=\"today\">{$j}</td>";
	}else{
		echo"<td>{$j}</td>";
	}
	
	if(($j+$i)%7 == 0){
		echo "</tr><tr>";
	}
}

for($i=6; $lw<$i; $i--){
	echo "<td></td>";
}
echo"</tr>";
echo"</table>";
?>
</body>
</html>
