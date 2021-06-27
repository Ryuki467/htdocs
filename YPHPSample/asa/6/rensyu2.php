<?php
$data = [];
$data[] = new Item("KP1001","うまそうな白菜",300);
$data[] = new Item("KP1002","甘いキャベツ",450);
$data[] = new Item("FA2015","すごいピーマン",150);

class Item{
	private $pcode;
	private $name;
	private $price;
	
	function __construct($pc,$na,$pr){
		$this->pcode = $pc;
		$this->name = $na;
		$this->price = $pr;
	}
	
	function getPcode(){
		return $this->pcode;
	}
	function getName(){
		return $this->name;
	}
	function getPrice(){
		return $this->price;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  <tr><th>pcode</th><th>name</th><th>price</th></tr>
<?php
foreach($data  as $item){
  echo "<tr>";
  echo "<td>{$item->getPcode()}</td>";
  echo "<td>{$item->getName()}</td>";
  echo "<td>{$item->getPrice()}</td>";
  echo "</tr>";
}
?>
  </table>
  </body>
</html>
