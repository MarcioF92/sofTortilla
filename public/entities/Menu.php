<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="menues")
 **/
class Menu{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idmenu;

    /** @Column(type="string", length=100) **/
    private $name;

    /** @Column(type="string", length=100) **/
    private $position;

    /** @Column(type="integer") **/
    private $enabled;

    /**
     * @OneToMany(targetEntity="Item", mappedBy="idmenu")
    */ 
    private $items;

    /**
     * @OneToOne(targetEntity="ShowMenu", mappedBy="idmenu")
    */ 
    private $show_menu;

    public function __construct(){
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdmenu(){
        return $this->idmenu;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPosition(){
        return $this->position;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function getEnabled(){
        return $this->enabled;
    }

    public function setEnabled($enabled){
        $this->enabled = $enabled;
    }

    public function getItems(){
        return $this->items;
    }

    public function setItem($item){
        $this->items->add($item);
    }

    public function getShowMenu(){
        return $this->show_menu;
    }

    public function setShowMenu($show_menu){
        $this->show_menu = $show_menu;
    }

 }

?>