<!DOCTYPE html>
<html>
<head>
<title>ワーク7</title>
</head>
<body>

<?php

$hour = 1;

switch($hour){
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	print "寝ています";
	break;
	
	case 6:
	case 7:
	case 8:
	case 9:
	print "おはようございます";
	break;
	
	case 10:
	case 11:
	case 12:
	case 13:
	case 14:
	case 15:
	case 16:
	case 17:
	case 18:
	print "こんにちは";
	break;
	
	case 19:
	case 20:
	case 21:
	case 22:
	print "お疲れ様でした";
	break;
	
	case 23:
	case 24:
	print "おやすみなさい";
	break;
	
	default:
	print "その他です";
	break;
}
?>

</body>
</html>
