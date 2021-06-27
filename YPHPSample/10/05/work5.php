<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
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
	width: 80%;
}
</style>
</head>
<body>
<?php
$name = "";
$age = "";
$hobby = "";

if(!empty($_SESSION)){
	if(isset($_SESSION["name"])){
		$name = $_SESSION["name"];
	}
	if(isset($_SESSION["age"])){
		$age = $_SESSION["age"];
	}
	if(isset($_SESSION["hobby"])){
		$hobby = $_SESSION["hobby"];
	}
	if(isset($_SESSION["prefecture"])){
		$prefecture = $_SESSION["prefecture"];
	}
	if(isset($_SESSION["movie"])){
		$movie = $_SESSION["movie"];
	}
	if(isset($_SESSION["music"])){
		$music = $_SESSION["music"];
	}
}

if(!empty($_POST)){
	if(isset($_POST["name"])){
		$name = $_POST["name"];
		$_SESSION["name"] = $name;
	}
	if(isset($_POST["age"])){
		$age = $_POST["age"];
		$_SESSION["age"] = $age;
	}
	if(isset($_POST["hobby"])){
		$hobby = $_POST["hobby"];
		$_SESSION["hobby"] = $hobby;
	}
	if(isset($_POST["prefecture"])){
		$prefecture = $_POST["prefecture"];
		$_SESSION["prefecture"] = $prefecture;
	}
	if(isset($_POST["movie"])){
		$movie = $_POST["movie"];
		$_SESSION["movie"] = $movie;
	}
	if(isset($_POST["music"])){
		$music = $_POST["music"];
		$_SESSION["music"] = $music;
	}
}

if(!isset($_SESSION["prefecture"])){
	$prefecture = "";
}
if(!isset($_SESSION["movie"])){
	$movie = "";
}
if(!isset($_SESSION["music"])){
	$music = [];
}

?>
<form action = "work5.php" method ="post">
	<h1 class = "col-md-12 text-center">フォーム<h1>
	<table>
		<tr><th>名前</th><td><input type="text" class = "form-control" name = "name" value = "<?php echo "{$name}"; ?>" ></td></tr>
		<tr><th>年齢</th><td><input type="text" class = "form-control" name = "age" value = "<?php echo "{$age}"; ?>" ></td></tr>
		<tr><th>趣味</th><td><input type="text" class = "form-control" name = "hobby" value = "<?php echo "{$hobby}"; ?>" ></td></tr>
		<tr><th>都道府県</th><td>
			<select class="form-control" name="prefecture">
				<option value = "">選択してください</option>
				<option value = "tokyo" <?php if($prefecture == "tokyo")echo "selected=\"selected\""; ?>>東京</option>
				<option value = "kanagawa" <?php if($prefecture == "kanagawa")echo "selected=\"selected\""; ?>>神奈川</option>
				<option value = "chiba" <?php if($prefecture == "chiba")echo "selected=\"selected\""; ?>>千葉</option>
				<option value = "saitama" <?php if($prefecture == "saitama")echo "selected=\"selected\""; ?>>埼玉</option>
			</select>
		</td></tr>
		<tr>
			<th><label for = "moive" class = "col-md-3 control-label">好きな映画</label></th>
			<td><label for = "action">
				<input type = "radio" id = "action" name = "movie" value = "action" <?php if($movie == "action")echo "checked=\"checked\""; ?>/>アクション</label>
			<label for = "comedy">
				<input type = "radio" id = "comedy" name = "movie" value = "comedy" <?php if($movie == "comedy")echo "checked=\"checked\""; ?>/>コメディ</label>
			<label for = "suspense">
				<input type = "radio" id = "suspense" name = "movie" value = "suspense" <?php if($movie == "suspense")echo "checked=\"checked\""; ?>/>サスペンス</label>
			<label for = "sf">
				<input type = "radio" id = "sf" name = "movie" value = "sf" <?php if($movie == "sf")echo "checked=\"checked\""; ?>/>SF</label></td>
		</tr>
		<tr>
			<th><label for = "music" class = "col-md-3 control-label">好きな音楽</label></th>
			<td><label for = "pop">
				<input type = "checkbox" id = "pop" name = "music[]" value = "pop" <?php if(in_array("pop",$music))echo "checked=\"checked\""; ?>/>POP</label>
			<label for = "rock">
				<input type = "checkbox" id = "rock" name = "music[]" value = "rock" <?php if(in_array("rock",$music))echo "checked=\"checked\""; ?>/>ロック</label>
			<label for = "enka">
				<input type = "checkbox" id = "enka" name = "music[]" value = "enka" <?php if(in_array("enka",$music))echo "checked=\"checked\""; ?>/>演歌</label>
			<label for = "randb">
				<input type = "checkbox" id = "randb" name = "music[]" value = "randb" <?php if(in_array("randb",$music))echo "checked=\"checked\""; ?>/>R&B</label></td>
		</tr>
		<tr><th></th><td><input type="submit" class = "btn" value = "送信"></td></tr>
	</table>
</form>
</body>
</html>
