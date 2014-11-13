<?php

namespace Frontend\Controllers;

class IndexController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
 		 $this->view->cache(false);
	}

}
