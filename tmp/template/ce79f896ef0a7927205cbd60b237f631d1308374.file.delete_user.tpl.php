<?php /* Smarty version Smarty-3.1.8, created on 2016-03-27 18:12:07
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\usuarios\delete_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1507256f84ca7333219-38935927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce79f896ef0a7927205cbd60b237f631d1308374' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\usuarios\\delete_user.tpl',
      1 => 1459112658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1507256f84ca7333219-38935927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f84ca7367ee7_38945168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f84ca7367ee7_38945168')) {function content_56f84ca7367ee7_38945168($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
	¿Estás seguro que quieres eliminar el Permiso <?php echo $_smarty_tpl->tpl_vars['user']->value->getUser();?>
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
	No existe Usuario
<?php }?><?php }} ?>