<?php

include_once('Model/User.php');
/**
* About Page
*/
class AboutController
{
	
	protected $user;

	public function __construct()
	{
		$this->user = new UserModel;
	}

	public function index()
	{
		$listUser = $this->user->all();
		return include_once('View/About.php');
	}

}	