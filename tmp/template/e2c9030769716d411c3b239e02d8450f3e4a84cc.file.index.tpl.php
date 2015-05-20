<?php /* Smarty version Smarty-3.1.8, created on 2015-03-17 00:57:00
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601555076dcce68318-56873994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2c9030769716d411c3b239e02d8450f3e4a84cc' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\registro\\index.tpl',
      1 => 1404861010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601555076dcce68318-56873994',
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
  'unifunc' => 'content_55076dcd007f99_57230239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55076dcd007f99_57230239')) {function content_55076dcd007f99_57230239($_smarty_tpl) {?><h2>Registro</h2>
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