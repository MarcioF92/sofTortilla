<?php

class menuWidgetModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getMenu($menu){
        //Se debe colocar el nombre porque se convierte en variable
        $menus['sidebar'] = array(
            array(
            'id' => 'inicio',
            'label' =>  'Inicio',
            'link' => BASE_URL 
            ),
            array(
                'id' => 'login',
                'label' =>  'Cerrar Sesión',
                'link' => BASE_URL . "login/cerrar"
            ),
            array(
                'id' => 'login',
                'label' =>  'Iniciar Sesión',
                'link' => BASE_URL . "login"
            ),
            array(
                'id' => 'registro',
                'label' =>  'Registrarse',
                'link' => BASE_URL . "registro"
            )
        );

        $menus['top'] = array(
            array(
            'id' => 'inicio',
            'label' =>  'Inicio',
            'link' => BASE_URL 
            ),
            array(
            'id' => 'post',
            'label' =>  'Post',
            'link' => BASE_URL . "post"
            ),
            array(
            'id' => 'configuracion',
            'label' =>  'Configuración',
            'link' => BASE_URL . "configuracion"
            )
        );

        return $menus[$menu];
    }
}

?>