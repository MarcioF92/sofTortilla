<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="permissions_role")
 **/
class PermissionRole{
    /**
     * @ManyToOne(targetEntity="Permission")
     * @JoinColumn(name="idpermission", referencedColumnName="idpermission")
     */
    private $idpermission;

    /**
     * @ManyToOne(targetEntity="Role")
     * @JoinColumn(name="idrole", referencedColumnName="idrole")
     */
    private $idrole;

    /** @Column(type="integer") **/
    private $value;

    public function getIdPermission(){
        return $this->idpermission;
    }

    public function setIdPermission($idpermission){
        $this->idpermission = idpermission;
    }

    public function getIdRole(){
        return $this->idrole;
    }

    public function setIdRole($idrole){
        $this->idrole = idrole;
    }

 }

?>