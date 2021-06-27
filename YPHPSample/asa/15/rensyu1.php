<?php
$pass = 25;
$result = [
    1 => [80,11],
    2 => [20,1],
    3 => [50,2],
    4 => [70,0],
    5 => [25,1],
];
$result2 = [];
for($i=1; $i<=count($result); $i++){
	$num = ($result[$i][0] - $result[$i][1] * 5 - $pass);
	if($num >= 0){
		$result2[] = $i;
	}
}
if(empty($result2)){
	echo"合格者はいません。";
}else{
	$result2 = implode(',',$result2);
	echo"合格者は" . $result2 . "です。";
}
?>
