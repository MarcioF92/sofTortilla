<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="permissions")
 **/
class Permission{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idpermission;

    /** @Column(type="string", length=100) **/
    private $name;

    /** @Column(type="string", length=100) **/
    private $permission_key;

    public function getIdPermission(){
        return $this->idpermission;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPermissionKey(){
        return $this->permission_key;
    }

    public function setPermissionKey($permission_key){
        $this->permission_key = $permission_key;
    }
 }

?>