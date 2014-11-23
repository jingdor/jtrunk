<?php
namespace Frontend\Models;



class Users extends \Phalcon\Mvc\Model{

	public function initialize()
    {
        $this->hasOne("id", "Frontend\Models\UsersProfile", "users_id",array(
        	'alias'=>"usersprofile"
        	));
    }

	public function getSource(){
		return 'users';
	}

}