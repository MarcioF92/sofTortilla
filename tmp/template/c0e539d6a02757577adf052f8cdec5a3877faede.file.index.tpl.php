<?php /* Smarty version Smarty-3.1.8, created on 2016-03-19 17:06:39
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470556ed790f392082-12262463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e539d6a02757577adf052f8cdec5a3877faede' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\index.tpl',
      1 => 1407883754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470556ed790f392082-12262463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ed790f3c30d7_17247384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ed790f3c30d7_17247384')) {function content_56ed790f3c30d7_17247384($_smarty_tpl) {?><h2>Listas de Acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/roles">Administración de roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/permisos">Administración de permisos</a></li>
</ul>
<?php }} ?>