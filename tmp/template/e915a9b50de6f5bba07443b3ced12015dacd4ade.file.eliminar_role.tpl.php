<?php /* Smarty version Smarty-3.1.8, created on 2016-03-20 20:28:07
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\eliminar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2277156eef9b4823294-06538090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e915a9b50de6f5bba07443b3ced12015dacd4ade' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\eliminar_role.tpl',
      1 => 1458502085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277156eef9b4823294-06538090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56eef9b4859732_58258184',
  'variables' => 
  array (
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eef9b4859732_58258184')) {function content_56eef9b4859732_58258184($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['role']->value)){?>
	¿Estás seguro que quieres eliminar el Role <?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
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
	No existe Role
<?php }?><?php }} ?>