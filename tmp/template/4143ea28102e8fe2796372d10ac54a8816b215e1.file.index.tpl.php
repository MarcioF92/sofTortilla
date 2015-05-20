<?php /* Smarty version Smarty-3.1.8, created on 2014-08-05 18:58:24
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2256753e15380f36560-53245020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4143ea28102e8fe2796372d10ac54a8816b215e1' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\acl\\index.tpl',
      1 => 1337949382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2256753e15380f36560-53245020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e153810316b1_80228223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e153810316b1_80228223')) {function content_53e153810316b1_80228223($_smarty_tpl) {?><h2>Listas de Acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Administración de roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Administración de permisos</a></li>
</ul>
<?php }} ?>