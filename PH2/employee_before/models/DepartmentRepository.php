<?php

class DepartmentRepository extends DbRepository{
    function getAll(){
        $sql = "select * from department";
        return $this->fetchAll($sql);
    }
}