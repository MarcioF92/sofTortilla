<?php

class loginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getUser($user, $password){
        $user = $this->_em->getRepository('User')->findOneBy(array('user' => $user, 'password' => Hash::getHash('sha1',$password, HASH_KEY)));
        return $user;
    }

}

?>