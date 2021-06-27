<?php
require_once("Data.class.php");
$data = new Data();
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク9</title>
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
		require("work9-form.php");
	}else{
		require("work9-confirm.php");
	}
?>
</body>
</html>
