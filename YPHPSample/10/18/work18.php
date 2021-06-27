<!DOCTYPE html>
<html>
<head>
<title>ワーク18</title>
</head>
<body>

<?php
$time_today = time();
$date_today = date("Y-m-d H:i:s");
$time_lastday = strtotime("-1 day");
$date_lastday = date("Y-m-d H:i:s", $time_lastday);
$time_5day = strtotime("+5 day");
$date_5day = date("Y-m-d H:i:s", $time_5day);
?>
<table border="1">
<?php
	echo"<tr><td>今日のタイムスタンプ</td><td>{$time_today}</td></tr>";
	echo"<tr><td>今日の日付</td><td>{$date_today}</td></tr>";
	echo"<tr><td>前日のタイムスタンプ</td><td>{$time_lastday}</td></tr>";
	echo"<tr><td>前日の日付</td><td>{$date_lastday}</td></tr>";
	echo"<tr><td>5日後のタイムスタンプ</td><td>{$time_5day}</td></tr>";
	echo"<tr><td>5日後の日付</td><td>{$date_5day}</td></tr>";
?>
</table>
</body>
</html>
