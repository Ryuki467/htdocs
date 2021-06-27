<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$pr1 = new Person("鈴木", 56);
$pr2 = new Person("佐藤", 38);

?>

<table border="2">
<tr bgcolor="#AAAAAA"><th>名前</th><th>年齢</th></tr>

<?php

echo"<tr><td>";
echo $pr1->getname();
echo"</td><td>";
echo $pr1->getage();
echo"</td></tr>";

echo"<tr><td>";
echo $pr2->getname();
echo"</td><td>";
echo $pr2->getage();
echo"</td></tr>";

?>

</table>

<?php

echo"<hr/>合計人数:";
echo Person::$count;

?>

<?php

class Person{
	private $name ="姓名";
	private $age = 20;
	public static $count = 0;
	
	public function __construct($nm, $ag){
		person::$count++;
		$this->name = $nm;
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
