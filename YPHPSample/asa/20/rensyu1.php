<?php
$socks = [
    ['A','R'],
    ['A','L'],
    ['B','R'],
    ['A','L'],
    ['A','R'],
    ['B','L'],
    ['A','L'],
    ['C','L'],
];
$result = 0;
for($i=0; $i<count($socks); $i++){
	for($j=0; $j<count($socks); $j++){
		if($i != $j){
			if(empty($socks[$i][2]) && empty($socks[$j][2])){
				if($socks[$i][0] == $socks[$j][0]){
					if($socks[$i][1] == 'R' && $socks[$j][1] == 'L'){
						$result += 1;
						$socks[$i] = [$socks[$i][0],$socks[$i][1],1];
						$socks[$j] = [$socks[$j][0],$socks[$j][1],1];
						break;
					}else if($socks[$j][1] == 'R' && $socks[$i][1] == 'L'){
						$result += 1;
						$socks[$i] = [$socks[$i][0],$socks[$i][1],1];
						$socks[$j] = [$socks[$j][0],$socks[$j][1],1];
						break;
					}
				}
			}
		}
	}
}

echo"そろっているペアは" . $result . "組です";
