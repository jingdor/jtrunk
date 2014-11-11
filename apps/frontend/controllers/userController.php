<?php

namespace Multiple\Frontend\Controllers;

class userController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
 		echo "user";
	}

	public function settingAction()
	{
 		$this->view->title="setting";
	}
	public function loginAction()
	{
 		echo "user";
	}

	public function logoutAction()
	{

		//执行退出逻辑 跳转到主页
 		$this->response->redirect("/");
	}

}