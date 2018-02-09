<?php
include_once('Model/Sql.php');

abstract class Model
{
	public $table;

	public $store;

	public function __construct()
	{
		$this->store = new Sql;
	}

	abstract public function all();

}