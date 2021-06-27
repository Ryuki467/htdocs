<?php
$a = [9,2,3,8];
$max = 0;

for($i=0; $i<count($a); $i++){
	for($j=0; $j<count($a); $j++){
		if($j=$i){
			continue;
		}
		for($l=0; $l<count($a); $l++){
			for($m=0; $m<count($a); $m++){
				if($max <= (($a[$i] * 10 + $a[$j]) + ($a[$l] * 10 + $a[$m]))){
					$max = (($a[$i] * 10 + $a[$j]) + ($a[$l] * 10 + $a[$m]));
				}
			}
		}
	}
}

echo $a[0] . "," . $a[1] . "," . $a[2] . "," . $a[3] . "のカードで最大のスコアは" . $max . "です。";
?>
