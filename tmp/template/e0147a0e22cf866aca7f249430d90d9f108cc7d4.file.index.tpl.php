<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 17:38:21
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379253b9b3bd95a340-50647134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0147a0e22cf866aca7f249430d90d9f108cc7d4' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\index.tpl',
      1 => 1337949382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379253b9b3bd95a340-50647134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9b3bd991a11_38551291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9b3bd991a11_38551291')) {function content_53b9b3bd991a11_38551291($_smarty_tpl) {?><h2>Listas de Acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Administración de roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Administración de permisos</a></li>
</ul>
<?php }} ?>