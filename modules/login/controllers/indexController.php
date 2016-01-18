<?php

class indexController extends Controller
{
    private $_login;

    public function __construct(){
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }

    public function index(){
        if (Session::get('authenticated')) {
            $this->redirect();
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

            $user = $this->_login->getUser(
                $this->getAlphaNum('usuario'),
                $this->getAlphaNum('pass')
            );

            if (!$user) {
                $this->_view->assign('error',"User y/o Pass incorrectos");
                $this->_view->render('index','login');
                exit;
            }

            if ($user->getEnabled() != 1) {
                $this->_view->assign('error',"User no habilitado");
                $this->_view->render('index','login');
                exit;
            }

            //Despues tratar de meter el $user en el Session
            Session::set('authenticated', true);
            Session::set('level', $user->getRole()->getIdrole());
            Session::set('user', $user->getUser());
            Session::set('iduser', $user->getIduser());
            Session::set('time', time());

            $this->redirect();

        }

        $this->_view->render('index','login');
    }

    public function cerrar(){
        Session::destroy();
        $this->redirect();
    }

}

?>