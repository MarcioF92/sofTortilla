<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 20:18:03
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425553eaa0ab345b32-68965928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8c1f77a819171b5c9e65eaada375f3ad223c91' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\registro\\index.tpl',
      1 => 1404861010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425553eaa0ab345b32-68965928',
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
  'unifunc' => 'content_53eaa0ab3a7fb8_85984200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eaa0ab3a7fb8_85984200')) {function content_53eaa0ab3a7fb8_85984200($_smarty_tpl) {?><h2>Registro</h2>
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