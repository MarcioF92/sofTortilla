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

    /**
     * @ManyToMany(targetEntity="Permission")
     * @JoinTable(name="permissions_role",
     *      joinColumns={@JoinColumn(name="idrole", referencedColumnName="idrole")},
     *      inverseJoinColumns={@JoinColumn(name="idpermission", referencedColumnName="idpermission")}
     *      )
     */
    private $permissions;

    public function __construct() {
        $this->permissions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdrole(){
        return $this->idrole;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPermissions(){
        return $this->permissions;
    }

    public function setPermission($permission){
        $this->permissions->add($permission);
    }
 }

?>