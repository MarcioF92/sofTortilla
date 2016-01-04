<?php

class indexController extends Controller
{
    private $_registro;

    public function __construct()
    {
        parent::__construct();
        $this->_registro = $this->loadModel('registro');
        //$this->_view->setWidgetOptions('menu-top', array('top', 'top', true));
    }
 
    public function index(){
        if (Session::get('autenticado')) {
            $this->redireccionar();
        }

        $this->_view->assign('titulo', 'Registrarse');

        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);

            if(!$this->getSql('nombre')){
                $this->_view->assign('_error', 'Debe introducir el nombre');
                $this->_view->render('index', 'registro');
                exit;
            }

            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir el usuario');
                $this->_view->render('index', 'registro');
                exit;
            }

            if($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))){
                $this->_view->assign('_error', 'El usuario ya existe');
                $this->_view->render('index', 'registro');
                exit;
            }

            if(!$this->validarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'La direccion de email es inválida');
                $this->_view->render('index', 'registro');
                exit;
            }

            if($this->_registro->verificarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', 'Ya existe email');
                $this->_view->render('index', 'registro');
                exit;
            }

            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir el password');
                $this->_view->render('index', 'registro');
                exit;
            }

            if($this->getPostParam('pass') != $this->getPostParam('confirmar')){
                $this->_view->assign('_error', 'No coinciden las Password');
                $this->_view->render('index', 'registro');
                exit;
            }

            //$this->getLibrary('class.phpmailer');
            $mail = new PHPmailer();

            $this->_registro->registrarUsuario($this->getSql('nombre'), $this->getAlphaNum('usuario'), $this->getSql('pass'), $this->getPostParam('email'));

            $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));

            if(!$usuario){
                $this->_view->assign('_error', 'Error al registrar el usuario');
                $this->_view->render('index', 'registro');
                exit;
            }

                $mail->From = "http://localhost/Frameworks/flight/";
                $mail->FromName = 'Tutorial MVC';
                $mail->Subject = 'Validación de usuario';
                $mail->Body = 'Hola <strong>' . $this->getSql('nombre') . '</strong>,' .
                    '<p>Se ha registrado en http://localhost/Frameworks/flight/ para activar ' .
                    'su cuenta haga click en el siguiente enlace:</p>' .
                    '<a href="'. BASE_URL . 'registro/activar' . 
                    $usuario['idusuario'] . '/' . $usuario['codigo'] . '">' .
                    BASE_URL . 'registro/activar' . 
                    $usuario['idusuario'] . '/' . $usuario['codigo'] . '</a>';

                $mail->AltBody = 'Su servidor no soporta html';
                $mail->AddAddress($this->getPostParam('email'));
                $mail->send();

                $this->_view->assign('datos', false);
                $this->_view->assign('_mensaje', 'Registro casi terminado, fijate tu email para activar tu cuenta');
        }

        $this->_view->render('index', 'registro');
    }

    public function activar($id, $codigo){
        $this->_view->titulo = "Activación de usuario";
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
            $this->_view->_error = '_error al activar el usuario';
                $this->_view->render('activar', 'registro');
                exit;
        }

        $row = $this->_registro->getUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        if (!$row) {
            $this->_view->_error = 'La cuenta no existe';
            $this->_view->render('activar', 'registro');
            exit;
        }

        if ($row['estado'] == 1) {
            $this->_view->_error = 'La cuenta ya ha sido activada';
            $this->_view->render('activar', 'registro');
            exit;
        }

        $this->_registro->activarUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

        $row = $this->_registro->getUsuario($this->filtrarInt($id), $this->filtrarInt($codigo));

         if ($row['estado'] == 0) {
            $this->_view->_error = '_error al activar el usuario';
            $this->_view->render('activar', 'registro');
            exit;
        }


        $this->_view->mensaje = 'La cuenta ha sido activada satisfactoriamente (:';
        $this->_view->render('activar', 'registro');
    }

}

?>