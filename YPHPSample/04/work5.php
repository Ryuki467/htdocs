<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$weight = 77;
$height = 1.65;

//BMI指数を求める BMI指数 = 体重kg / (身長m * 身長m)
$bmi = $weight / ($height * $height);

if($bmi < 20){
	print "やせぎみです";
}else if($bmi < 24){
	print "普通です";
}else if($bmi < 26){
	print "太りぎみです";
}else{
	print "太りすぎです";
}

?>

</body>
</html>
