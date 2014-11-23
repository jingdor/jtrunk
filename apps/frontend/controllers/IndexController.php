<?php

namespace Frontend\Controllers;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

	public function indexAction()
	{
		$users=new \Frontend\Models\Users();
		// $user=$users->find(1);
		$this->view->users=$users->find(1)[0];
	}

}
