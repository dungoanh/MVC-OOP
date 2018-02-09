<?php 
include_once('config.php');
include_once('Model/database.php');

class Sql
{
	public $database;

	function __construct() {
		$this->database = new dataBase();
	}

	public function search ($ar=array(),$where) {
		$i=0;
		$sql="SELECT * FROM  ".$where.' WHERE ';
		foreach($ar as $key=>$ars){
			if($i+1==count($ar)){
				$sql.= $key.'='.$ars;
			}else{
				$sql.= $key.'='.$ars.'and';
			}
			$i++;
		}
		$this->database->setQuery($sql);
		return $this->database->getAllRow();
	}

	public function getTable($table)
	{
		$sql = "SELECT * FROM $table ";
		$this->database->setQuery($sql);
		return $this->database->getAllRow();
	}

}
?>