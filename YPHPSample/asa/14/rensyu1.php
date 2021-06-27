<?php
$dislike = 4;
$rooms = [101,204,301,401,501,604];
$room2 = [];

foreach($rooms as $room){
	$result = explode("$dislike", $room);
	if(strlen($result[0]) == 3){
		$room2[] = $result[0];
	}
}
if(empty($room2)){
	echo"希望する病室はありません";
}else{
	echo"希望する病室は";
	foreach($room2 as $room){
		echo $room . ",";
	}
	echo"です";
}
