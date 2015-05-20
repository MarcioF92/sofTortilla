<?php

class loginController extends Controller
{
    private $_login;

    public function __construct(){
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }

    public function index(){

        if (Session::get('autenticado')) {
            $this->redireccionar();
        }

        $this->_view->assign('titulo', 'Iniciar Sesión');

        if ($this->getInt('enviar') == 1) {

            $this->_view->assign('datos', $_POST);

            if (!$this->getAlphaNum('usuario')) {
                $this->_view->assign('error',"Debe introducir su nombre de usuario");
                $this->_view->render('index','login');
                exit;
            }

            if (!$this->getAlphaNum('pass')) {
                $this->_view->assign('error',"Debe introducir Password");
                $this->_view->render('index','login');
                exit;
            }

            $row = $this->_login->getUsuario(
                $this->getAlphaNum('usuario'),
                $this->getAlphaNum('pass')
            );

            if (!$row) {
                $this->_view->assign('error',"User y/o Pass incorrectos");
                $this->_view->render('index','login');
                exit;
            }

            if ($row[0]['estado'] != 1) {
                $this->_view->assign('error',"User no habilitado");
                $this->_view->render('index','login');
                exit;
            }

            Session::set('autenticado', true);
            Session::set('level', $row[0]['role']);
            Session::set('usuario', $row[0]['usuario']);
            Session::set('idusuario', $row[0]['idusuario']);
            Session::set('tiempo', time());

            $this->redireccionar();

        }

        $this->_view->render('index','login');
    }

    public function cerrar(){
        Session::destroy();
        $this->redireccionar();
    }

}

?>