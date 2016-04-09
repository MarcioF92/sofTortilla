<?php

/* Clase abstracta de la que heredan todas las vistas */

require_once ROOT . 'libs' . DS .'smarty' . DS . 'libs' . DS . 'Smarty.class.php';


class View extends Smarty
{
    private $_request;
    private $_js;
    private $_acl;
    private $_paths;
    private $_jsPlugin;
    private $_template;
    private $_theme;
    private static $_item;
    private $_widget;
    private $_menues;
    private $_registry;
    private $_db;
    private $_em;
 
    public function __construct(Request $petition, Acl $_acl)
    {
        parent::__construct();
        $this->_request = $petition;
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_paths = array();
        $this->_jsPlugin = array();
        $this->_template = DEFAULT_LAYOUT;
        $this->_theme = DEFAULT_THEME;

        $this->_registry = Registry::getInstance();
        $this->_db = $this->_registry->_db;
        $this->_em = $this->_registry->_em;

        self::$_item = null;

        $module = $this->_request->getModule();
        $controller = $this->_request->getController();

        if ($module) {
            $this->_paths['view'] = ROOT . 'modules' . DS . $module . DS . 'views' . DS . $controller . DS;
            $this->_paths['js'] = BASE_URL . 'modules/' . $module . '/views/' . $controller . '/js/';
        } else {
            $this->_paths['view'] = ROOT . 'views' . DS . $controller . DS;
            $this->_paths['js'] = BASE_URL . '/views/' . $controller . '/js/';
        }

    }

    public static function getViewId(){
        return self::$_item;
    }
 
    public function render($view = false, $item = false, $noLayout = false) // La llamada a las vistas, recibe la vista como parámetro para su controlador, dibuja la vista
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
            'path_css' => BASE_URL . 'views/themes/' . $this->_theme . '/css/',
            'path_img' => BASE_URL . 'views/themes/' . $this->_theme . '/img/',
            'path_js' => BASE_URL . 'views/themes/' . $this->_theme . '/js/',
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

         // La ruta al View del controlador $this->_paths['view'] . $view . '.tpl';
        
        if($view){
            if(is_readable($this->_paths['view'] . $view . '.tpl')){
                if($noLayout){
                    $this->template_dir = $this->_paths['view'];
                    $this->display($this->_paths['view'] . $view . '.tpl');
                    exit;
                }
                $this->assign('_content', $this->_paths['view'] . $view . '.tpl');

            } 
            else {
                throw new Exception('Error de vista');
            }
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
                $this->_js[] = $this->_paths['js'] . $js[$i] . '.js';
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

    public function getLayoutPositions(){
        if (is_readable(ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'configs.php')) {
            include_once ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'configs.php';

            return get_layout_positions();

        }

        throw new Exception("Error configuración layout");
        
    }

    public function getWidgets(){
        //Llama a los widgets con sus respectivas configuraciones
        $widgetEntities = $this->_em->getRepository('WidgetEntity')->findAll();
        $widgets = array();
        foreach ($widgetEntities as $widget) {
            if (file_exists(ROOT . DS . 'widgets' . DS . $widget->getDirectory() . DS . $widget->getDirectory() . '.php')) {
                 if (file_exists(ROOT . DS . 'widgets' . DS . $widget->getDirectory() . '/data.json')) {
                    $json = file_get_contents(BASE_URL . 'widgets/' . $widget->getDirectory() . '/data.json');
                    $array = json_decode($json,true);
                    foreach ($array['positions'] as $position) {
                        $widgets[$widget->getDirectory() . "-" . $position['position']] = array( 
                                                        'name' => $widget->getDirectory(),
                                                        'config' => $this->widget($widget->getDirectory(), 'getConfig', array($position['position'])),
                                                        'content' => $this->widget($widget->getDirectory(), 'getContent', array($position['stringid'], $position['position']))
                                                        );
                    }
                }
            }

            
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
                        if (isset($this->_widget[$k])) {
                            $widgets[$k]['content'][2] = $this->_widget[$k];
                        }
                        // Llenar la posición del Layout //
                        $positions[$widgets[$k]['config']['position']][] = $widgets[$k]['content'];
                    }
                }
            }
        }

        return $positions;
    }

    public function getMenues(){
        //Llama a los menues con sus respectivas configuraciones

        $menuEntities = $this->_em->getRepository('Menu')->findAll();
        $menues = array();
        foreach ($menuEntities as $menu) {
            $menues[$menu->getIdmenu()] = array( 
                                        'name' => $menu->getName(),
                                        'config' => array(
                                            'position' => $menu->getPosition(), 
                                            'enabled' => $menu->getEnabled(),
                                            'show' => $menu->getShowMenu()->getMenuShow(),
                                            'hide' => $menu->getShowMenu()->getMenuHide()
                                        ),
                                        'content' => $this->getMenuItems($menu->getIdmenu(), $menu->getPosition())
                                        );
        }

        $positions = $this->getLayoutPositions();

        foreach ($menues as $menu) {
            // Verificar si la pos del widget está presente //
            if (isset($positions[$menu['config']['position']])) {
                // Verificar si widget está inhabilitado para esa vista //
                if (!is_array($menu['config']['hide']) && $menu['config']['hide'] == 'all') {
                    if (is_array($menu['config']['show'])) {
                        if (in_array(self::$_item, $menu['config']['show'])) {
                            if ($menu['config']['enabled'] == 1) {               
                                // Llenar la posición del Layout //
                                $contenido = $menu['content'];
                                $pos = $menu['config']['position'];
                                $positions[$pos] = $contenido;
                            }
                        }
                    } else {
                        if ($menu['config']['show'] == 'all') {
                            if ($menu['config']['enabled'] == 1) {               
                                // Llenar la posición del Layout //
                                $contenido = $menu['content'];
                                $pos = $menu['config']['position'];
                                $positions[$pos] = $contenido;
                            }
                        }
                    }
                } else {
                    if (is_array($menu['config']['show'])) {
                        if (in_array(self::$_item, $menu['config']['show'])) {
                            if ($menu['config']['enabled'] == 1) {               
                                // Llenar la posición del Layout //
                                $contenido = $menu['content'];
                                $pos = $menu['config']['position'];
                                $positions[$pos] = $contenido;
                            }
                        }
                    } else {
                        if ($menu['config']['show'] == 'all') {
                            if ($menu['config']['enabled'] == 1) {               
                                // Llenar la posición del Layout //
                                $contenido = $menu['content'];
                                $pos = $menu['config']['position'];
                                $positions[$pos] = $contenido;
                            }
                        }
                    }
                }
            }
        }

        return $positions;

    }

    public function getMenuItems($idmenu, $view){

        $itemsEntity = $this->_em->getRepository('Menu')->find($idmenu)->getItems();

        $items_final = array();
        foreach ($itemsEntity as $item) {
            if($item->getParent() == NULL){
                if (!$item->getChildren()->isEmpty()) {
                    $items_final[$item->getIdmenuitem()] = array(
                            array(
                            'id' => $item->getIdmenuitem(),
                            'label' =>  $item->getLabel(),
                            'link' => $item->getUrl() 
                            )
                        );
                    $subitems = $item->getChildren();
                    foreach ($subitems as $subitem) {
                        $items_final[$item->getIdmenuitem()][] = array(
                                                                'id' => $subitem->getIdmenuitem(),
                                                                'label' =>  $subitem->getLabel(),
                                                                'link' => $subitem->getUrl() 
                                                                );
                    }
                } else {
                    $items_final[$item->getIdmenuitem()] = array(
                                                        'id' => $item->getIdmenuitem(),
                                                        'label' =>  $item->getLabel(),
                                                        'link' => $item->getUrl() 
                                                        );
                }
            }
        }

        if(is_readable(ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'menues' . DS . $view . '.php')){
            ob_start();
            extract($items_final);
            include ROOT . 'views' . DS . 'themes' . DS . $this->_theme . DS . 'menues' . DS . $view . '.php';
            $content = ob_get_contents();
            ob_end_clean();

            return $content;
        }

        throw new Exception("Error de la vista del menu");
    }

}

?>