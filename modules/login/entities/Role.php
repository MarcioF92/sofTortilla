<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="roles")
 **/
class Role{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idrole;

    /** @Column(type="string", length=100) **/
    private $name;

    public function getIdrole(){
        return $this->idrole;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
 }

?>