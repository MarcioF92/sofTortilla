<?php /* Smarty version Smarty-3.1.8, created on 2014-07-08 20:10:16
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:540153bc7a58b9fe25-20135919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3b7a6e7dba8e0d64de7fea42a4eb445cd0f385' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1404861010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '540153bc7a58b9fe25-20135919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'atos' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53bc7a58bf36b8_68335273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc7a58bf36b8_68335273')) {function content_53bc7a58bf36b8_68335273($_smarty_tpl) {?><h2>Registro</h2>
<form name="form1" method="post" action="">
	<input type="hidden" value="1" name="enviar" />

	<p>
		<label>Nombre: </label>
		<input type="text" name="nombre" value="<?php if (isset($_smarty_tpl->tpl_vars['atos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
 <?php }?>" />
	</p>

	<p>
		<label>Usuario: </label>
		<input type="text" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['atos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
 <?php }?>" />
	</p>

	<p>
		<label>Password: </label>
		<input type="password" name="pass"  />
	</p>

	<p>
		<label>Confirmar: </label>
		<input type="password" name="confirmar"  />
	</p>

	<p>
		<label>Email: </label>
		<input type="text" name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['atos']->value)){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
 <?php }?>" />
	</p>

	<p>
		<label></label>
		<input type="submit" value="Enviar" />
	</p>
</form><?php }} ?>