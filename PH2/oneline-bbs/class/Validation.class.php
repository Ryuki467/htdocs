<?php
//入力チェックを行うためのクラス
class Validation{
    static function isRequired($param){
        if(empty($param)){
            return false;
        }else{
            return true;
        }
    }
}