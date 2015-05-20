<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:57:40
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\configuracion\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2354953ea9591a4c857-77628680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa76cf5309702f1454e4861d593d61b3235fc05c' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\index\\index.tpl',
      1 => 1407884256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2354953ea9591a4c857-77628680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ea9591a97530_47321628',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea9591a97530_47321628')) {function content_53ea9591a97530_47321628($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/usuarios">Usuarios</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl">Acl</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/modulos">Módulos</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/widgets">Widgets</a></li>
</ul><?php }} ?>