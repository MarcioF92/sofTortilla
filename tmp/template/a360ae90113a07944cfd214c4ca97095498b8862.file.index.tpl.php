<?php /* Smarty version Smarty-3.1.8, created on 2014-08-04 21:35:12
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1569653e026c0471080-78953508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a360ae90113a07944cfd214c4ca97095498b8862' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1404861010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569653e026c0471080-78953508',
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
  'unifunc' => 'content_53e026c0555fa2_97227158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e026c0555fa2_97227158')) {function content_53e026c0555fa2_97227158($_smarty_tpl) {?><h2>Registro</h2>
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