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
            'titulo' =>  'Inicio',
            'enlace' => BASE_URL 
            ),
            array(
                'id' => 'login',
                'titulo' =>  'Cerrar Sesión',
                'enlace' => BASE_URL . "login/cerrar"
            ),
            array(
                'id' => 'login',
                'titulo' =>  'Iniciar Sesión',
                'enlace' => BASE_URL . "login"
            ),
            array(
                'id' => 'registro',
                'titulo' =>  'Registrarse',
                'enlace' => BASE_URL . "registro"
            )
        );

        $menus['top'] = array(
            array(
            'id' => 'inicio',
            'titulo' =>  'Inicio',
            'enlace' => BASE_URL 
            ),
            array(
            'id' => 'post',
            'titulo' =>  'Post',
            'enlace' => BASE_URL . "post"
            ),
            array(
            'id' => 'configuracion',
            'titulo' =>  'Configuración',
            'enlace' => BASE_URL . "configuracion"
            )
        );

        return $menus[$menu];
    }
}

?>