<?php 

$base_url = "http://jws.jalan.net/APICommon/OnsenSearch/V1/";

$key = "cap14ddbecad68";
$pref = "090000"; //群馬
$l_area = "090200"; //草津
$s_area = "090205"; //草津
$start = "1"; //開始番号
$xml_ptn = "1"; //件数

$data = compact("key","pref","l_area","s_area","start","xml_ptn");
$path = http_build_query($data);
$url = $base_url . "?" . $path;

$jalan = @simplexml_load_file($url);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>じゃらん</title>
</head>
<body>
	<div>草津の温泉</div>
	<div>件数:<?php echo $jalan->NumberOfResults; ?></div>
	<table border="1">
		<tr>
			<th>温泉ID</th><th>温泉名</th><th>温泉地名</th><th>泉質</th><th>温泉住所</th><th>キャッチ</th>
		</tr>
		<?php foreach($jalan->Onsen as $Onsen){ ?>
		<tr>
			<td><?php echo $Onsen->OnsenID; ?></td>
			<td><a href="<?php echo $Onsen->OnsenAreaURL; ?>"><?php echo $Onsen->OnsenName; ?></a></td>
			<td><?php echo $Onsen->OnsenAreaName; ?></td>
			<td><?php echo $Onsen->NatureOfOnsen; ?></td>
			<td><?php echo $Onsen->OnsenAddress; ?></td>
			<td><?php echo $Onsen->OnsenAreaCaption; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>