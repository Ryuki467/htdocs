<!DOCTYPE html>
<html>
<head>
<title>ワーク15</title>
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
<form action = "work15.php" method ="post">
	<h1>フォーム</h1>
	<table>
		<tr><th>ID</th><td><input type="text" name = "id" value = ""></td></tr>
		<tr><th>パスワード</th><td><input type="password" name = "password" value = "" ></td></tr>
		<tr><th></th><td>
			<input type="hidden" name = "action" value = "auth" />
			<form action = "http://localhost/YPHPSample/Rensyu/10/16/b/work16.php" method = "post">
			<input type = "text" name = "name"/>
			<input type = "submit" value = "送信"/>
			<input type="submit" value = "ログイン">
		</td></tr>
	</table>
</form>
</body>
</html>
