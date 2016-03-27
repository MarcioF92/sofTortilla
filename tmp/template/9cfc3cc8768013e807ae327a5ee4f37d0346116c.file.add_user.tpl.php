<?php /* Smarty version Smarty-3.1.8, created on 2016-03-25 12:11:23
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\usuarios\add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209356f4400edb2a53-71493572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cfc3cc8768013e807ae327a5ee4f37d0346116c' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\usuarios\\add_user.tpl',
      1 => 1458918682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3209356f4400edb2a53-71493572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f4400edeaa01_06624221',
  'variables' => 
  array (
    'datos' => 0,
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4400edeaa01_06624221')) {function content_56f4400edeaa01_06624221($_smarty_tpl) {?><form action="" method="POST">
	<input type="hidden" name="guardar" value="1" />
	<label for="name">Nombre y apellido: </label> <input name="name" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['name'];?>
<?php }?>" />
	<label for="user">Usuario: </label> <input name="user" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['user'];?>
<?php }?>" />
	<label for="password">Contraseña: </label> <input name="password" type="password" />
	<label for="email">Email: </label> <input name="email" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
<?php }?>" />
	<label for="role">Role: </label>
	<select name="role">
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
	<label for="disabled">Enviar email de confirmación</label><input type="checkbox" name="disabled" value="1" /><br>
	<input type="submit" value="Agregar" />
</form><?php }} ?>