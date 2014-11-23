<?php

namespace Frontend\Controllers;

use \Phalcon\Mvc\Controller;

class AuthController extends Controller
{

	public function indexAction()
	{
		$users=new \Frontend\Models\Users();
		// $user=$users->find(1);
		$this->view->users=$users->find(1)[0];
	}

	public function qqAction()
	{
			echo "qq login";
	}
	public function callbackAction()
	{
			echo "asasa";
	}

	public function login()
	{

	}

	public function getAuth()
	{

	}

	public function loginAction()
	{
		
	}

}
