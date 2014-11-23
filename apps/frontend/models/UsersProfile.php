<?php
namespace Frontend\Models;

class UsersProfile extends \Phalcon\Mvc\Model{

	public function initialize()
    {
    	$this->belongsTo('users_id', 'users', 'id', array(
            'alias' => 'Robot'
        ));
    }

	public function getSource(){
		return 'users_profile';
	}

}