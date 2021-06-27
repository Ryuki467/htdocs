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
