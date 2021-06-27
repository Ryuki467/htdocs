<?php
$money = 2000;
$cost = [300,500,300,100,100];
$point = 0;

echo"最初のカード残高<br>\n";
echo $money . "円<br>\n";
for($i=0; $i<count($cost); $i++){
	echo ($i+1) . "回目の降車時、運賃は" . $cost[$i] . "円<br>\n";
	if($cost[$i] < $point){
		$point -= $cost[$i];
	}else{
		$money -= $cost[$i];
		$point += $cost[$i]*0.1;
	}
	echo"カード残高:" . $money . "円\t\tポイント:" . $point . "<br>\n";
}
?>