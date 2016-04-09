<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="show_menues")
 **/
class ShowMenu{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idshow;

    /**
     * @OneToOne(targetEntity="Menu", inversedBy="idmenu")
     * @JoinColumn(name="idmenu", referencedColumnName="idmenu")
     */
    private $idmenu;

    /** @Column(type="string", length=100) **/
    private $menu_show;

    /** @Column(type="string", length=100) **/
    private $menu_hide;

    public function getIdshow(){
        return $this->idshow;
    }

    public function getIdmenu(){
        return $this->idmenu;
    }

    public function setIdmenu($idmenu){
        $this->idmenu = $idmenu;
    }

    public function getMenuShow(){
        if($this->menu_show != 'all'){
            return explode(',', $this->menu_show);
        } else {
            return $this->menu_show;
        }
    }

    public function setMenuShow($menu_show){
        if($this->menu_show == 'all'){
            $this->menu_show = $menu_show;
        } else {
            $this->menu_show .= ',' . $menu_show;
        }
    }

    public function getMenuHide(){
        if($this->menu_hide != 'all'){
            return explode(',', $this->menu_hide);
        } else {
            return $this->menu_hide;
        }
    }

    public function setMenuHide($menu_hide){
        if($this->menu_hide == 'all'){
            $this->menu_hide = $menu_hide;
        } else {
            $this->menu_hide .= ',' . $menu_hide;
        }
    }
 }

?>