<?php

/**
 * @author Marcio Fuentes
 * @Entity @Table(name="widgets")
 **/
class WidgetEntity{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idwidget;

    /** @Column(type="string", length=100) **/
    private $directory;

    public function getIdwidget(){
        return $this->idwidget;
    }

    public function getDirectory(){
        return $this->directory;
    }

    public function setDirectory($directory){
        $this->directory = $directory;
    }

 }

?>