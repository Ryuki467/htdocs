<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$pr = new Person;
$pr->setname("鈴木");
$pr->setage(56);

?>

<table border="2">
<tr bgcolor="#AAAAAA"><th>名前</th><th>年齢</th></tr>

<?php

echo"<tr><td>";
echo $pr->getname();
echo"</td><td>";
echo $pr->getage();
echo"</td></tr>";

?>

</table>

<?php

class Person{
	private $name ="姓名";
	private $age = 20;
	
	public function setname($nm){$this->name = $nm;}
	public function setage($ag){
		if($ag>=20 && $ag<=60){
			$this->age = $ag;
		}else
			$this->age = -1;
	}
	public function getname(){return $this->name;}
	public function getage(){return $this->age;}
}

?>

</body>
</html>
