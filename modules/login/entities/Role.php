<?php

/**
 * @Entity @Table(name="roles")
 **/
class Role{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idRole;

    /** @Column(type="string", length=100) **/
    private $name;

    public function getIdUser(){
        return $this->idUser;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
 }

?>