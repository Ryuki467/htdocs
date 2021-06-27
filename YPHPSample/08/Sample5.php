<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$usr1 = new User("鈴木", 56, "mmm@nnn.nn.jp", "03-xxx-xxxx");

?>

<table border="2">
<tr bgcolor="#AAAAAA"><th>名前</th><th>年齢</th><th>アドレス</th><th>電話番号</th></tr>

<?php

echo"<tr><td>";
echo $usr1->getname();
echo"</td><td>";
echo $usr1->getage();
echo"</td><td>";
echo $usr1->getadr();
echo"</td><td>";
echo $usr1->gettel();
echo"</td></tr>";

?>

</table>

<?php

class Person{
	protected $name ="姓名";
	protected $age = 20;
	public function __construct($nm, $ag){
		$this->name = $nm;
		if($ag>=20 && $ag<=60){
			$this->age = $ag;
		}else
			$this->age = -1;
	}
	public function getname(){return $this->name;}
	public function getage(){return $this->age;}
}

class User extends Person{
	private $adr = "xxx@xxx.xx.xx";
	private $tel = "xx-xxx-xxxx";
	public function __construct($nm, $ag, $ad, $tl){
		parent::__construct($nm, $ag);
		$this->adr = $ad;
		$this->tel = $tl;
	}
	public function getname(){return "会員:".$this->name;}
	public function getadr(){return $this->adr;}
	public function gettel(){return $this->tel;}
}

?>

</body>
</html>
