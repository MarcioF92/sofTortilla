<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="menu_items")
 **/
class Item{
    /** 
     * @Id @Column(type="integer") @GeneratedValue 
    **/
    private $idmenuitem;

    /** 
     * @Column(type="integer")
     * @ManyToOne(targetEntity="Menu", inversedBy="items")
     * @JoinColumn(name="idmenu", referencedColumnName="idmenu")
    **/
    private $idmenu;

    /** @Column(type="string", length=100) **/
    private $label;

    /** @Column(type="string", length=100) **/
    private $url;

    /**
     * @ManyToOne(targetEntity="Item", inversedBy="children")
     * @JoinColumn(name="parent", referencedColumnName="idmenuitem")
     */
    private $parent;

    /**
     * @OneToMany(targetEntity="Item", mappedBy="parent")
     */
    private $children;

    public function __construct(){
        $this->$children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdmenuitem(){
        return $this->idmenuitem;
    }

    public function getIdmenu(){
        return $this->idmenu;
    }

    public function setIdmenu($idmenu){
        $this->idmenu = $idmenu;
    }

    public function getLabel(){
        return $this->label;
    }

    public function setLabel($label){
        $this->label = $label;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getParent(){
        return $this->parent;
    }

    public function setParent($parent){
        $this->parent = $parent;
    }

    public function getChildren(){
        return $this->children;
    }

    public function setChildren($children){
        $this->children()->add($children);
    }

 }

?>