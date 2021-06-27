<?php

$salary = [
  'x' => 1300,
  'y' => 1500,
  'z' => 1700,
];
$workingHours = [
  [8, 19],
  [9, 20],
  [10, 21],
  [11, 22],
  [0, 23],
  [20, 22],
  [0, 21],
];

$worktime = [];
$salarys = 0;

for($i=0; $i<count($workingHours); $i++){
	if($workingHours[$i][0]<9){
		$worktime[$i][0] = 9 - $workingHours[$i][0];
	}else{
		$worktime[$i][0] = 0;
	}
	
	if($workingHours[$i][0]>17){
		$worktime[$i][1] = 0;
	}else if($workingHours[$i][0]<=9 && $workingHours[$i][1]>=17){
		$worktime[$i][1] = 8;
	}else if($workingHours[$i][0]>9 && $workingHours[$i][1]>=17){
		$worktime[$i][1] = 17 - $workingHours[$i][0];
	}
	
	if($workingHours[$i][0]<17 && $workingHours[$i][1]<22){
		$worktime[$i][2] = $workingHours[$i][1] - 17;
	}else if($workingHours[$i][0]>17 && $workingHours[$i][1]<=22){
		$worktime[$i][2] = $workingHours[$i][1] - $workingHours[$i][0];
	}else{
		$worktime[$i][2] = 5;
	}
	
	if($workingHours[$i][1]>22){
		$worktime[$i][3] = 24 - $workingHours[$i][1];
	}
}

for($i=0; $i<count($worktime); $i++){
	for($j=0; $j<count($worktime[$i]); $j++){
		if($j%3 == 0){
			$salarys += $salary["z"] * $worktime[$i][$j];
		}else if($j%3 == 1){
			$salarys += $salary["x"] * $worktime[$i][$j];
		}else if($j%3 == 2){
			$salarys += $salary["y"] * $worktime[$i][$j];
		}
	}
}
echo"給料は" . $salarys . "円です。";
?>
