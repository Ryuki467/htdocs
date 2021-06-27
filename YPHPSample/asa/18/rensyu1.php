<?php

$poiNum = 2;
$endurance = 10;
$goldFishWeight = [5,5,3,1,4];
$fish = 0;

for($j=1; $j<=$poiNum; $j++){
	$durable = $endurance;
	for($i=$fish; $i<count($goldFishWeight); $i++){
		if($durable>$goldFishWeight[$i]){
			$durable -= $goldFishWeight[$i];
			$fish += 1;
		}else{
			$durable = 0;
			break;
		}
	}
}

echo"すくえる金魚は" . $fish . "匹です。";
?>
