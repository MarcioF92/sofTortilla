<?php

/**
 * @Entity @Table(name="users")
 **/
class User{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=30) **/
    private $name;

    /** @Column(type="string", length=30) **/
    private $user;

    /** @Column(type="string", length=40) **/
    private $password;

    /** @Column(type="string", length=100) **/
    private $email;

    /**
     * @ManyToOne(targetEntity="roles")
     * @JoinColumn(name="role", referencedColumnName="idrole")
     */
    private $role;

    /** @Column(type="smallint") **/
    private $enabled;

    /** @Column(type="date") **/
    private $date;

    /** @Column(type="integer") **/
    private $code;

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getEnabled(){
        return $this->enabled;
    }

    public function setEnabled($enabled){
        $this->enabled = $enabled;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($code){
        $this->code = $code;
    }

}