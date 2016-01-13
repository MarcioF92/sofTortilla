<?php /* Smarty version Smarty-3.1.8, created on 2016-01-13 23:36:28
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\themes\default_theme\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235005687e2d94fce14-96180481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5be6a478fed955816ef640056d27a6f73d8f1e2e' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\header.tpl',
      1 => 1452724586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235005687e2d94fce14-96180481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5687e2d95c70b2_55910005',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'widgets' => 0,
    'tp' => 0,
    'menues' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5687e2d95c70b2_55910005')) {function content_5687e2d95c70b2_55910005($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="es" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['path_css'];?>
normalize.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['path_css'];?>
foundation.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['path_js'];?>
vendor/modernizr.js" type="text/javascript"></script>
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
                    <!--<?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                        <?php echo $_smarty_tpl->tpl_vars['tp']->value;?>

                    <?php } ?> -->
                    <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menues']->value['header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

                    <h2><?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></h2>

                </article>

            </div>

        </div><?php }} ?>