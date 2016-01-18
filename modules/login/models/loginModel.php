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
        //$user = $this->_em->getRepository('User')->findBy(array('user' => $user));
        $user = $this->_em->getRepository('User')->findOneBy(array('user' => $user, 'password' => Hash::getHash('sha1',$password, HASH_KEY)));
        return $user;
    }

}

?>