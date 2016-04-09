<?php /* Smarty version Smarty-3.1.8, created on 2016-03-27 20:15:12
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\usuarios\edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2519056f853d504c010-77042216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0ceb99af6c6fc7178a89846332304f7413484a1' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\usuarios\\edit_user.tpl',
      1 => 1459120505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2519056f853d504c010-77042216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f853d509e192_67984107',
  'variables' => 
  array (
    'user' => 0,
    'datos' => 0,
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f853d509e192_67984107')) {function content_56f853d509e192_67984107($_smarty_tpl) {?><form action="" method="POST">
	<input type="hidden" name="guardar" value="1" />
	<label for="name">Nombre y apellido: </label> <input name="name" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
<?php }?><?php }?>" />
	<label for="user">Usuario: </label> <input name="user" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['user'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value->getUser();?>
<?php }?><?php }?>" />
	<label for="email">Email: </label> <input name="email" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?><?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
<?php }?><?php }?>" />
	<label for="role">Role: </label>
	<select id="role" name="role">
		<option value="-1">Seleccione un role</option>
		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getIdrole();?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</option>
		<?php } ?>
	</select>
	<input type="submit" value="Editar" />
</form>
<script type="text/javascript">
$(document).ready(function(){
	$("#role").val("<?php echo $_smarty_tpl->tpl_vars['user']->value->getRole()->getIdrole();?>
");
});
</script><?php }} ?>