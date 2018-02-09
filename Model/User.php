<?php
include_once('Model/Model.php');
/**
* Table User
*/
class UserModel extends Model
{
	function __construct()
	{
		parent::__construct();
		$this->table = "vt_user";
	}

	public function all()
	{
		var_dump($this->store);
		return $this->store->getTable($this->table);
	}
}