<?php

class EmployeeRepository extends DbRepository{
    function getEmployeeModel(){
        //社員の入力データモデル配列
        $data = [
            "ID" => "",
            "name" => "",
            "age" => "",
            "address" => "",
            "dept_id" => "",
        ];
        return $data;
    }
    
    function getAll(){
        $sql = "SELECT e.ID,e.name,e.age,e.address,e.dept_id,d.dept_name FROM employee as e LEFT JOIN department as d ON e.dept_id = d.dept_id ORDER BY e.ID ASC";
        //SQL実行
        return $this->fetchAll($sql);
    }
    
    function insert($employee){
        //プリペアードステートメント用のSQL作成
        $sql = "INSERT INTO employee(name,age,address,dept_id) VALUES(:name,:age,:address,:dept_id)";
        //SQL実行
        $stmt = $this->execute($sql,$employee);
    }
    //編集画面処理の追加
    function getEmployeeByID($param){
        $sql = "SELECT e.ID,e.name,e.age,e.address,e.dept_id,d.dept_name FROM employee as e LEFT JOIN department as d ON e.dept_id = d.dept_id";
        return $this->fetch($sql,$param);
    }
    
    function update($employee){
        $sql = "UPDATE employee SET name = :name, age = :age, address = :address, dept_id = :dept_id, updated_at = now() WHERE ID = :ID";
        $stmt = $this->execute($sql, $employee);
    }
    
    //削除処理の追加
    function deleteEmployeeByID($param){
        $sql = "DELETE FROM employee WHERE ID = :ID";
        $stmt = $this->execute($sql, $param);
        return $stmt->rowCount();
    }
}