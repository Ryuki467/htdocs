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
asort($socks);
var_dump($socks);

foreach($socks as $sock){
	if($sock[1] == "R"){
		$R += 1; 
	}else if($sock[1] == "L"){
		$L += 1; 
	}
}

