<?php include "MyClass.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$usr1 = new User("鈴木", 56, "mmm@nnn.nn.jp", "03-xxx-xxxx");

?>

<table border="2">
<tr bgcolor="#AAAAAA"><th>名前</th><th>年齢</th><th>アドレス</th><th>電話番号</th></tr>

<?php

echo"<tr><td>";
echo $usr1->getname();
echo"</td><td>";
echo $usr1->getage();
echo"</td><td>";
echo $usr1->getadr();
echo"</td><td>";
echo $usr1->gettel();
echo"</td></tr>";

?>

</table>

</body>
</html>
