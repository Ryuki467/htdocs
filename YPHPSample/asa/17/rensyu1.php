<?php
$salary = [
  'x' => 1000,
  'y' => 1300,
  'z' => 1500,
];
$workingHours = [
    [0, 9],
    [9, 17],
    [17, 22],
    [22, 23],
];

$worktime = [];

foreach($workingHours as $workingHour){
	$worktime[] = $workingHour[1] - $workingHour[0];
}

$salarys = ($salary["z"] * $worktime[0] + $salary["x"] * $worktime[1] + $salary["y"] * $worktime[2] + $salary["z"] * $worktime[3]);
echo"給料は" . $salarys . "円です。";
?>
