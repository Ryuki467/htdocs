<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action="http://localhost/YPHPSample/Rensyu/13/Sample5.php" method="post">
<input type="text" name="url"/>
<input type="submit" value="送信"/>
</from>

<?php

if(isset($_POST["url"])){
	$doc = simplexml_load_file($_POST["url"]);
	echo"<center><h1>". $doc->channel->title ."</h1>". $doc->channel->description ."<hr/></center>";
	foreach($doc->channel->item as $list){
		echo "<p><h3><a href=\"$list->link\"> $list->title </a></h3>";
		echo $list->description ."<br/>";;
		echo $list->pubDate;
		echo "</p>";
	}
}
?>
</table>

</body>
</html>