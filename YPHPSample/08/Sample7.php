<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ca1 = new Car;
$ca1->number = 1234;
$ca1->tank =25.5;

$ca2 = new Car;
$ca2->number = 5678;
$ca2->tank = 30.5;

?>

<table border="2">
<tr bgcolor="#AAAAAA"><th>ナンバー</th><th>ガソリン</th></tr>

<?php

echo"<tr><td>";
echo $ca1->getnumber();
echo"</td><td>";
echo $ca1->gettank();
echo"</td></tr>";

echo"<tr><td>";
echo $ca2->getnumber();
echo"</td><td>";
echo $ca2->gettank();
echo"</td></tr>";

?>

</table>

<?php

class Car{
	public $number = 4444;
	public $tank = 25.5;
		
	function getnumber(){return $this->number;}
	function gettank(){return $this->tank;}
}

?>

</body>
</html>