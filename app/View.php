<?php

/* Clase abstracta de la que heredan todas las vistas */

require_once ROOT . 'libs' . DS .'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty
{
    private $_request;
    private $_js;
    private $_acl;
    private $_rutas;
    private $_jsPlugin;
    private $_template;
    private $_theme;
    private static $_item;
    private $_widget;
    private $_menues;
    private $_registry;
    private $_db;
 
    public function __construct(Request $peticion, Acl $_acl)
    {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_rutas = array();
        $this->_jsPlugin = array();
        $this->_template = DEFAULT_LAYOUT;
        $this->_theme = DEFAULT_THEME;

        $this->_registry = Registry::getInstancia();
        $this->_db = $this->_registry->_db;

        self::$_item = null;



        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();

        if ($modulo) {
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        } else {
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . '/views/' . $controlador . '/js/';
        }
    }

    public static function getViewId(){
        return self::$_item;
    }
 
    public function render($vista, $item = false, $noLayout = false) // La llamada a las vistas, recibe la vista como parámetro para su controlador, dibuja la vista
    {

        if ($item) {
            self::$_item = $item;
        }

        $this->template_dir = ROOT . 'views' . DS . 'themes'. DS . $this->_theme . DS;
        $this->config_dir = ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;        

        $js = array();

       if(count($this->_js)) {
            $js = $this->_js;
       }

        /* Rutas por defecto para los estilos las img y los js del View Layout Default */
 
        $_params = array(
            'ruta_css' => BASE_URL . 'views/themes/' . $this->_theme . '/css/',
            'ruta_img' => BASE_URL . 'views/themes/' . $this->_theme . '/img/',
            'ruta_js' => BASE_URL . 'views/themes/' . $this->_theme . '/js/',
            'item' => self::$_item,
            'js'=>$js,
            'jsPlugin'=> $this->_jsPlugin,
            'root' => BASE_URL,            
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );

         // La ruta al View del controlador $this->_rutas['view'] . $vista . '.tpl';
         
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){
            if($noLayout){
                $this->template_dir = $this->_rutas['view'];
                $this->display($this->_rutas['view'] . $vista . '.tpl');
                exit;
            }

            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');
        } 
        else {
            throw new Exception('Error de vista');
        }

        $this->assign('widgets', $this->getWidgets());
        $this->assign('menues', $this->getMenues());
        $this->assign('_acl', $this->_acl);
        $this->assign('_layoutParams', $_params);

        $this->display(ROOT . 'views' . DS . 'themes'. DS . $this->_theme . DS . $this->_template . '.tpl');
    }

    public function setJs(array $js){
        if(is_array($js) && count($js)){
            for ($i=0; $i < count($js); $i++) { 
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            } 
        } else {
            throw new Exception("Error de js");
        }
    }

    public function setJsPlugin(array $js){
        if (is_array($js) && count($js)) {
            for ($i=0; $i < count($js); $i++) { 
                $this->_jsPlugin[] = BASE_URL . 'public/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js Plugin');
        }
    }

    public function setTemplate($template){
        $this->_template = (string) $template;
    }

    public function setTheme($theme){
        $this->_theme = (string) $theme;
    }

    public function widget($widget, $method, $options = array()){
        if(!is_array($options)){
            $options = array($options);
        }

        if (is_readable(ROOT . 'widgets' . DS . $widget . DS . $widget . '.php')) {
            include_once ROOT . 'widgets' . DS . $widget . DS . $widget . '.php';
            $widgetClass = $widget . 'Widget';

            if (!class_exists($widgetClass)) {
                throw new Exception("Error de clase Widget");              
            }

            if (is_callable($widgetClass, $method)) {
                if (count($options)) {
                    
                    return call_user_func_array(array(new $widgetClass, $method), $options);
                } else {
                    return call_user_func(array(new $widgetClass, $method));
                }
            }

            throw new Exception("Error metodo Get");
            
        }
    }

    public function widgetMethod($widget, $method, array $options = array()){
        if(!is_array($options)){
            $options = array($options);
        }

        if (is_readable(ROOT . 'widgets' . DS . $widget . DS . $widget . '.php')) {
            include_once ROOT . 'widgets' . DS . $widget . DS . $widget . '.php';
            $widgetClass = $widget . "Widget";

            if (!class_exists($widgetClass)) {
                throw new Exception("Error de clase Widget");              
            }

            if (is_callable($widget, $method)) {               
                if (count($options)) {
                    return array($widget, $method, $options);
                } else {
                    return array($widget, $method);
                }
            }

            throw new Exception("Error metodo Get");
            
        }
    }

    public function getLayoutPositions(){
        if (is_readable(ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'configs.php')) {
            include_once ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'configs.php';

            return get_layout_positions();

        }

        throw new Exception("Error configuración layout");
        
    }

    public function getWidgets(){
        //Llama a los widgets con sus respectivas configuraciones
        $widgets_result = $this->_db->query("SELECT w.*, wc.* FROM widgets w INNER JOIN widgets_content wc ON w.idwidget = wc.idwidget");
        $widgets_result_array = $widgets_result->fetchall(PDO::FETCH_ASSOC);
        $widgets = array();
        foreach ($widgets_result_array as $w) {
            $widgets[$w['carpeta'] . "-" . $w['stringid']] = array( 
                                                        'nombre' => $w['carpeta'],
                                                        'config' => $this->widget($w['carpeta'], 'getConfig', array($w['stringid'])),
                                                        'content' => $this->widgetMethod('menu', 'getContent', array($w['stringid'], $w['position']))
                                                        );
        }

        $positions = $this->getLayoutPositions();

        $keys = array_keys($widgets);

        foreach ($keys as $k) {
            // Verificar si la pos del widget está presente //
            if (isset($positions[$widgets[$k]['config']['position']])) {
                // Verificar si widget está inhabilitado para esa vista //
                if (!isset($widgets[$k]['config']['hide']) || !in_array(self::$_item, $widgets[$k]['config']['hide'])) {
                    // Verificar si widget está habilitado para esa vista //
                    if ($widgets[$k]['config']['show'] === 'all' || in_array(self::$_item, $widgets[$k]['config']['show'])) {
                        if ($widgets[$k]['config']['habilitado'] == 1) {                       
                            if (isset($this->_widget[$k])) {
                                $widgets[$k]['content'][2] = $this->_widget[$k];
                            }
                            // Llenar la posición del Layout //
                            $contenido = $widgets[$k]['content'];
                            $pos = $widgets[$k]['config']['position'];
                            $positions[$pos][] = $this->getWidgetContent($contenido);
                        }
                    }
                }
            }
        }

        //print_r($positions);

        return $positions;
    }

    public function getMenues(){
        //Llama a los menues con sus respectivas configuraciones
        $menues_result = $this->_db->query("SELECT * FROM menues");
        $menues_result_array = $menues_result->fetchall(PDO::FETCH_ASSOC);
        $menues = array();
        foreach ($menues_result_array as $m) {
            $menues[$m['idmenu']] = array( 
                                        'nombre' => $m['nombre'],
                                        'config' => array(
                                            'position' => $m['position'], 
                                            'habilitado' => $m['habilitado']),
                                        'content' => $this->getMenuItems($m['idmenu'], $m['position'])
                                        );
        }

        $positions = $this->getLayoutPositions();

        foreach ($menues as $menu) {
            if(isset($positions[$menu['config']['position']])){
                if ($menu['config']['habilitado']) {
                    $pos = $menu['config']['position'];
                    $positions[$pos][] = $menu['content'];
                }
            }
        }

        return $positions;

    }

    public function getMenuItems($idmenu, $vista){
        $items = $this->_db->query("SELECT * FROM menu_items WHERE idmenu = '$idmenu' AND idpadre = '0'")->fetchall(PDO::FETCH_ASSOC);
        $items_final = array();
        foreach ($items as $item) {
            $tiene_subitems = $this->_db->query("SELECT COUNT(*) AS cantidad FROM menu_items WHERE idmenu = '$idmenu' AND idpadre = '" . $item['idmenuitem'] . "'")->fetchall(PDO::FETCH_ASSOC);
            $cantidad = intval($tiene_subitems[0]['cantidad']);
            if($cantidad >= 1){
                $items_final[$item['idmenuitem']] = array(
                        array(
                        'id' => $item['idmenuitem'],
                        'titulo' =>  $item['label'],
                        'enlace' => $item['information'] 
                        )
                    );
                $subitems = $this->_db->query("SELECT * FROM menu_items WHERE idmenu = $idmenu AND idpadre = '" . $item['idmenuitem'] . "'")->fetchall(PDO::FETCH_ASSOC);
                foreach ($subitems as $subitem) {
                    $items_final[$item['idmenuitem']][] = array(
                                                            'id' => $subitem['idmenuitem'],
                                                            'titulo' =>  $subitem['label'],
                                                            'enlace' => $subitem['information'] 
                                                            );
                }
            } else {
                $items_final[$item['idmenuitem']] = array(
                                                    'id' => $item['idmenuitem'],
                                                    'titulo' =>  $item['label'],
                                                    'enlace' => $item['information'] 
                                                    );
            }
        }

        if(is_readable(ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'menues' . DS . $vista . '.php')){
            ob_start();
            extract($items_final);
            include ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'menues' . DS . $vista . '.php';
            $content = ob_get_contents();
            ob_end_clean();

            return $content;
        }

        throw new Exception("Error de la vista del menu");
    }

    public function getWidgetContent(array $content){
        if (!isset($content[0]) || !isset($content[1])) {
            throw new Exception("Error contenido Widget");
            return;
        }

        if (!isset($content[2])) {
            $content[2] = array();
        }

        return $this->widget($content[0], $content[1], $content[2]);

    }

    public function setWidgetOptions($key, $options){
        $this->_widget[$key] = $options;
    }
}

?>