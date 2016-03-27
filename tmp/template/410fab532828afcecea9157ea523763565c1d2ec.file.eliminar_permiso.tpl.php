<?php /* Smarty version Smarty-3.1.8, created on 2016-03-24 16:49:58
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\eliminar_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952656f40ca6589042-85460955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '410fab532828afcecea9157ea523763565c1d2ec' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\eliminar_permiso.tpl',
      1 => 1458834535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952656f40ca6589042-85460955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permission' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f40ca65badb3_93721703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f40ca65badb3_93721703')) {function content_56f40ca65badb3_93721703($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['permission']->value)){?>
	¿Estás seguro que quieres eliminar el Permiso <?php echo $_smarty_tpl->tpl_vars['permission']->value->getName();?>
?
	<form action="" method="POST">
		<input name="aceptar" type="hidden" value="1">
		<input type="submit" value="Aceptar">
	</form>
	<form action="" method="POST">
		<input name="cancelar" type="hidden" value="1">
		<input type="submit" value="Cancelar">
	</form>
<?php }else{ ?>
	No existe Permiso
<?php }?><?php }} ?>