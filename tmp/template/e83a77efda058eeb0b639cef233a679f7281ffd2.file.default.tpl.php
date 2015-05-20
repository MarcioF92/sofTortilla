<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:22:15
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\themes\default_theme\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270353df6fdcaad5b1-78244559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e83a77efda058eeb0b639cef233a679f7281ffd2' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\default.tpl',
      1 => 1407882133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270353df6fdcaad5b1-78244559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53df6fdcdb1b72_40405568',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'widgets' => 0,
    'tp' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'wd' => 0,
    'plg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df6fdcdb1b72_40405568')) {function content_53df6fdcdb1b72_40405568($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="es" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
normalize.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
foundation.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
vendor/modernizr.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
tiny.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" type="text/javascript"></script>

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
        <div class="fixed">
            <nav class="top-bar" data-topbar>
              <ul class="title-area">
                <li class="name">
                  <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>
</a></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>
              <section class="top-bar-section">
                <ul class="left">
                <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['top'])){?>
                    <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

                    <?php } ?>
                <?php }?>
                </ul>
              </section>
            </nav>
        </div>


          <div class="row">
     
            <div class="large-9 columns" role="content">
         
              <article>

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

                    
                </article>
            </div>

            <aside class="large-3 columns">

                <?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
                    <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

                    <?php } ?>
                <?php }?>

            </aside>

        </div>

            <footer class="row">
            <div class="large-12 columns">
              <hr/>
              <div class="row">
                <div class="large-6 columns">
                  <p>Copyright &copy; 2012 <a href="http://www.dlancedu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
</p>
                </div>
              </div>
            </div>
          </footer>

        <!-- javascript -->
        <script type="text/javascript">
            var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
vendor/jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html><?php }} ?>