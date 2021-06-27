<?php 

class Data{
	private $name = "";
	private $age = "";
	private $hobby = "";
	private $prefecture = "";
	private $movie = "";
	private $music = [];
	private $comment = "";
	
	public function __construct(){
		if(isset($_POST["name"])){
			$this->name = $_POST["name"];
		}
		if(isset($_POST["age"])){
			$this->age = $_POST["age"];
		}
		if(isset($_POST["hobby"])){
			$this->hobby = $_POST["hobby"];
		}
		if(isset($_POST["prefecture"])){
			$this->prefecture = $_POST["prefecture"];
		}
		if(isset($_POST["movie"])){
			$this->movie = $_POST["movie"];
		}
		if(isset($_POST["music"])){
			$this->music = $_POST["music"];
		}
		if(isset($_POST["comment"])){
			$this->comment = $_POST["comment"];
		}
	}
	
	public function getName(){
		if(empty($this->name)){
			$this->name = "";
		}
		return $this->name;
	}
	public function getAge(){
		if(empty($this->age)){
			$this->age = "";
		}
		return $this->age;
	}
	public function getHobby(){
		if(empty($this->hobby)){
			$this->hobby = "";
		}
		return $this->hobby;
	}
	public function getPrefecture(){
		if(empty($this->prefecture)){
			$this->prefecture = "";
		}
		return $this->prefecture;
	}
	public function getMovie(){
		if(empty($this->movie)){
			$this->movie = "";
		}
		return $this->movie;
	}
	public function getMusic(){
		if(empty($this->music)){
			$this->music = [];
		}
		return $this->music;
	}
	public function getComment(){
		if(empty($this->comment)){
			$this->comment = "";
		}
		return $this->comment;
	}
}

?>