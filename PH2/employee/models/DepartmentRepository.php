<?php

class DepartmentRepository extends DbRepository{
    function getDepartmentModel(){
        //社員の入力データモデル配列
        $data = [
            "dept_id" => "",
            "dept_name" => "",
        ];
        return $data;
    }
    
    function getAll(){
        $sql = "select * from department";
        return $this->fetchAll($sql);
    }
    
    function insert($department){
        //プリペアードステートメント用のSQL作成
        $sql = "INSERT INTO department(dept_name) VALUES(:dept_name)";
        //SQL実行
        $stmt = $this->execute($sql,$department);
    }
    //編集画面処理の追加
    function getDepartmentByID($param){
        $sql = "SELECT dept_id,dept_name FROM department";
        return $this->fetch($sql,$param);
    }
    
    function update($department){
        $sql = "UPDATE department SET dept_name = :dept_name WHERE dept_id = :dept_id";
        $stmt = $this->execute($sql, $department);
    }
}