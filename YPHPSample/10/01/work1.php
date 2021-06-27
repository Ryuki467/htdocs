<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
<style type = "text/css">
form{
	width: 500px;
	margin: 0 auto;
	padding: 20px;
	text-align: center;
	background-color: #b5eafc;
}
table{
	width: 100%;
}
th{
	text-align: right;
	font-weight: normal;
}
td{
	text-align: left;
}
input.form-control{
	padding: 2px 5px;
	width: 80%;
	line-height: 25px;
}
input.btn{
	padding: 2px 5px;
	height: 40px;
	width: 100px;
}
</style>
</head>
<body>
<form action = "work1.php" method ="post">
	<h1 class = "col-md-12 text-center">フォーム<h1>
	<table>
		<tr><th>名前</th><td><input type="text" class = "form-control" name = "name"></td></tr>
		<tr><th>年齢</th><td><input type="text" class = "form-control" name = "age"></td></tr>
		<tr><th>趣味</th><td><input type="text" class = "form-control" name = "hobby"></td></tr>
		<tr><th></th><td><input type="submit" class = "btn" value = "送信"></td></tr>
	</table>
<?php
if(isset($_POST["name"])){
	echo"<div>{$_POST["name"]}</div>";
}
if(isset($_POST["age"])){
	echo"<div>{$_POST["age"]}</div>";
}
if(isset($_POST["hobby"])){
	echo"<div>{$_POST["hobby"]}</div>";
}

?>
</form>
</body>
</html>
