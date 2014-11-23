<?php

namespace Frontend\Controllers;

use \Phalcon\Mvc\Controller,
	\Frontend\Models\Users,
	\Frontend\Models\UesrsProfile;


class UserController extends Controller
{

	public function indexAction()
	{
		if(!$this->session->has("logined")){
			$response = new \Phalcon\Http\Response();
			$response->redirect("user/login");
			$response->send();
		};      
	}

	public function  loginAction(){
				$users=new \Frontend\Models\Users();
		$user=$users->find(1);

		 // var_dump(iterator_to_array($user)[0]);

			foreach ($user as $key => $value) {
			var_dump($value->usersprofile->email);
		}

	}
	public function  doLoginAction(){
		// $this->session->set('logined','true');
	}
	public function  doLogoutAction(){
		 $this->session->destroy();
	}
	public function  signupAction(){

	}


}
