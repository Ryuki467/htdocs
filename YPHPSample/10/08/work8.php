<?php
	$name = "";
	$age = "";
	$hobby = "";
	$prefecture = "";
	$movie = "";
	$comment = "";
	$music = [];
	
if(isset($_POST["name"])){
	$name = $_POST["name"];
}
if(isset($_POST["age"])){
	$age = $_POST["age"];
}
if(isset($_POST["hobby"])){
	$hobby = $_POST["hobby"];
}
if(isset($_POST["prefecture"])){
	$prefecture = $_POST["prefecture"];
}
if(isset($_POST["movie"])){
	$movie = $_POST["movie"];
}
if(isset($_POST["music"])){
	$music = $_POST["music"];
}
if(isset($_POST["comment"])){
	$comment = $_POST["comment"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク8</title>
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
	font-size: 20px;
}
td{
	text-align: left;
	font-size: 15px;
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
select.form-control, option{
	height: 40px;
	display: block;
}
</style>
</head>
<body>
<?php
	if(empty($_POST)){
		require("work8-form.php");
	}else{
		require("work8-confirm.php");
	}
	?>
</body>
</html>
