<?php

class accessController extends Controller
{

    public function __construct(){
        parent::__construct();
    }

    public function index($codigo){
        $this->_view->assign('titulo', 'Error');
        $this->_view->assign('_error', $this->_getError($codigo));
        $this->_view->render('access', 'error');
    }

    private function _getError($codigo = false){
        if ($codigo) {
            $codigo = $this->filterInt($codigo);
            if (is_int($codigo)) {
                $codigo = $codigo;
            }
        } else {
            $codigo = 'default';
        }     

        $error['default'] = 'Ha ocurrido un error y la página no puede mostrarse';
        $error['5050'] = 'Acceso restringido';
        $error['8080'] = 'Tiempo de la sesión agotado';

        if (array_key_exists($codigo, $error)) {
           return $error[$codigo];
        } else {
            return $error['default'];
        }
    }

}

?>