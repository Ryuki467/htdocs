<?php 

$url = "";
if(isset($_POST['url'])){
    $url = $_POST['url'];
}

//URLを読み込み、simplexmlを利用してPHPのオブジェクトに変換する
$jalan_xml = @simplexml_load_file($url);
//XMLオブジェクトをJSで加工しやすいJSON形式に変更する
echo json_encode($jalan_xml);

?>