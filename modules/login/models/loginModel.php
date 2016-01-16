<?php

class loginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    /*public function getUser($user, $password){
            $data = $this->_db->query("SELECT * FROM users WHERE user = '" . $user . "' AND password = '" . Hash::getHash('sha1',$password, HASH_KEY) . "';");
            return $data->fetchall();
    }*/

    public function getUser($user, $password){
		echo ROOT . 'modules' . DS . 'login' . DS . 'entities' . DS . 'User';
        $user = $this->_em->getRepository('User');
        
		/*$user = $repository->findOneBy(array('category' => 'Nombre Category'));
		$user = $repository->findOneBy(array('user' => $user, 'password' => Hash::getHash('sha1',$password, HASH_KEY)));*/
        return $user;
    }

}

?>