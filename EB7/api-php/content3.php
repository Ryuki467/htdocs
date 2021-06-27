<?php
session_start();

//初期設定
$data = [];
$data[] = "前田敦子";
$data[] = "大島優子";
$data[] = "篠田麻里子";
$data[] = "渡辺麻友";
$data[] = "高橋みなみ";
$data[] = "小嶋陽菜";
$data[] = "坂野友美";

$member = "";
if(isset($_POST['member'])){
    $member = $_POST['member'];
}

$members = [];
if(isset($_SESSION['members'])){
    $members = $_SESSION['members'];
}else{
    foreach($data as $key => $val){
        echo $data .":" . $val;
        $members[$key] = [];
        $members[$key]["name"] = $val;
        $members[$key]["vote"] = 0;
    }
}

if($member !== "" && array_key_exists($member,$members)){
    $members[$member]["vote"] += 1;
}

$_SESSION['members'] = $members;

foreach($members as $key => $row){
    $vote[$key] = $row["vote"];
}

array_multisort($vote,SORT_DESC,$members);
//JSON形式で出力する
echo json_encode($members);