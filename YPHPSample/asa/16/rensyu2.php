<?php
$people = ['A', 'B', 'C'];
$books = [
  ['A', 1000],
  ['B', 1000],
  ['B', 2000],
  ['C', 2000],
];

//arsort  https://www.php.net/manual/ja/function.arsort.php

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
