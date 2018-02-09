<?php 
	class dataBase{
		// thuoc tính
		public $pdo; 
		public $query;
		public $statement;
		// phương thức
		function dataBase(){
			try{
				$this->pdo=new PDO('mysql:host=localhost'.';dbname='.DBNAME,USER,PASS);
				$this->pdo->query('set names utf8');
			}catch(PDOException $er){
				return false;
			}
		}
		public function setQuery($query){
			$this->query=$query;
		}
		public function execute($options=array()) {
	        try{
				$this->statement = $this->pdo->prepare($this->query);
				
				$this->statement->execute($options);
				return $this->statement;
	            
	            }
	        catch(PDOException $e){ return false;}
	    }
		public function getAllRow($ar=array()){
			try{
				$this->statement=$this->pdo->prepare($this->query);
				$this->statement->execute($ar);
				return $result=$this->statement->fetchAll(PDO::FETCH_OBJ);
			}catch(PDOException $er){
				return false;
			}
		}
		public function getRow($ar=array()){
			try{
				$this->statement=$this->pdo->prepare($this->query);
				$this->statement->execute($ar);
				return $result=$this->statement->fetch(PDO::FETCH_OBJ);
			}catch(PDOException $er){
				return false;
			}
		}
		public function disconnect()
		{
			return $this->pdo=NULL;
		}

	}
 ?>