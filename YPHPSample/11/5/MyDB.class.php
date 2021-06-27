<?php

class MyDB{
	private $username = "root";
	private $password = "";
	private $database = "workbook";
	private $host = "localhost";
	private $connection;
	
	public function __construct(){
		//DSN
		$dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8";
		//DB接続
		$this->connection = new PDO($dsn,$this->username,$this->password);
		//結果を連想配列で取得
		$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	
	
	public function executePrepareQuery($sql,$data){
		$statement = $this->connection->prepare($sql);
		foreach($data as $dat){
			$statement->bindParam(1, $dat);
		}
		$result = $statement->execute($data);
		if($result){
			return $statement;
		}else{
			return false;
		}
	}
}

?>
