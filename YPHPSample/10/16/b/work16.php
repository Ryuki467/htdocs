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
<form>
	<table>
		<tr>
			<td><a href="work15.php?action=top">TOP</a></td>
			<td><a href="work15.php?action=about">About</a></td>
			<td><a href="work15.php?action=links">Links</a></td>
			<td><a href="work15.php?action=logout">ログアウト</a></td>
		</tr>
	</table>
	<h1>TOP</h1>
	<div>
		<p>ログインしました</p>
		<p>TOPページです</p>
	</div>
</form>
</body>
</html>