<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ca1 = new Car;
$ca1->setnumber(1234);
$ca1->settank(25.5);

$ca2 = new Car;
$ca2->setnumber(5678);
$ca2->settank(30.5);

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
	
	public function setnumber($nm){
		$this->number = $nm;
	}
	public function settank($tn){
		if($tn>=0){
			$this->tank =$tn;
		}else
			$this->tank = -1;
	}
	function getnumber(){return $this->number;}
	function gettank(){return $this->tank;}
}

?>

</body>
</html>