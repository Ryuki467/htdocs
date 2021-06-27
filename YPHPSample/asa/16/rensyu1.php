<?php
$people = [
  'ando',
  'noda',
];
$books = [
  ['noda', 1000],
  ['ando', 500],
];

$result = [];
for($i=0; $i<count($people); $i++){
	for($j=0; $j<count($books); $j++){
		if(empty($result){
			if($people[$i] = $books[$j][0]){
				$result[] = [$people[$i] => $books[$j][1]];
			}
		}
	}
}

var_dump($result);

echo"書籍購入費ランキング<br>\n";
for($i=1; $i<=count($people); $i++){
	echo $i . "位 " . $result[$i][A] . "<br>";
}
?>