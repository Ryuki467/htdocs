<!DOCTYPE html>
<html lang="ja">
<head>
<title>サンプル</title>
<script type="text/javascript">

var lic = "このコードを複製・改変・利用することで発生したいかなる問題に対しても自己責任で対処することを誓います。";

function infalert(mes){

for(i=1; i<=10; i++){

alert("ここにメッセージを入力");

}

document.write(mes);

}

infalert(lic);

</script>
</head>
<body>
<?php
print"ようこそPHPへ！<br/>\n";
$a = "100" + 100;
echo $a;
$b = 2;
?>
<br>
<img src="frog<?php echo $b ?>.jpg">
</body>
</html>