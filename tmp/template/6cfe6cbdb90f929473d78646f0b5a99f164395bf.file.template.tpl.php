<?php /* Smarty version Smarty-3.1.8, created on 2014-08-01 19:22:50
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\layout\default\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2055553dc133a7d8b13-09040332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cfe6cbdb90f929473d78646f0b5a99f164395bf' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\layout\\default\\template.tpl',
      1 => 1405375635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2055553dc133a7d8b13-09040332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'it' => 0,
    '_item_style' => 0,
    'widgets' => 0,
    'wd' => 0,
    'tp' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'plg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53dc133ae7f3d6_89740794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dc133ae7f3d6_89740794')) {function content_53dc133ae7f3d6_89740794($_smarty_tpl) {?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
estilos.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validate.js" type="text/javascript"></script>
    
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
        
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
        
        <?php } ?>
        <?php }?>
    </head>

    <body>
        <body>
            <div id="main">
                <div id="header">
                    <div id="logo">
                        <h1><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</h1>
                    </div>

                    <div id="menu">
                        <div id="top_menu">
                            <!--<ul>
                            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])){?>
                            <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            
                            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                                
                                <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('current', null, 0);?>
                                
                            <?php }else{ ?>
                            
                                <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                                
                            <?php }?>
                            
                            <li><a class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</a></li>

                            <?php } ?>
                            <?php }?>
                            </ul>-->
                            <p>El Menú del default sidebar</p>

                            <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>

                                <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
                                    <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

                                <?php } ?>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
                                <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                                    <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

                                <?php } ?>
                            <?php }?>
                            <p>Termina el menú</p>
                        </div>
                    </div>
                </div>

                <div id="content">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                    <div id="error"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                    <div id="mensaje"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
                    <?php }?>

                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    
                </div>

            <div id="footer">
                Copyright &copy; 2012 <a href="http://www.dlancedu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
</a>
            </div>
        </div>

        <!-- javascript -->
        <script type="text/javascript">
            var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js_plugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
    </body>
</html><?php }} ?>