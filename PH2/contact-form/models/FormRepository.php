<?php

class FormRepository extends DbRepository{
    function getFormModel(){
        //フォームの入力データモデル配列
        $data = [
            "name" => "",
            "age" => "",
            "prefecture" => "",
            "address1" => "",
            "address2" => "",
            "comment" => "",
            "mail_address" => "",
        ];
        return $data;
    }
    
    function insert($form){
        //プリペアードステートメント用のSQL作成
        $sql = "INSERT INTO form(name,age,prefecture,address1,address2,comment,mail_address) VALUES(:name,:age,:prefecture,:address1,:address2,:comment,:mail_address)";
        //SQL実行
        $stmt = $this->execute($sql,$form);
    }
}