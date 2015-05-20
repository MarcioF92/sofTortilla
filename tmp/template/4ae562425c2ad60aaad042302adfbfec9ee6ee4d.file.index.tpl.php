<?php /* Smarty version Smarty-3.1.8, created on 2014-08-04 21:39:17
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2355753e0273feb5142-25489327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ae562425c2ad60aaad042302adfbfec9ee6ee4d' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1407199156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355753e0273feb5142-25489327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e0273ff28297_03797808',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e0273ff28297_03797808')) {function content_53e0273ff28297_03797808($_smarty_tpl) {?><h2>Iniciar Sesión</h2>
<?php if ($_smarty_tpl->tpl_vars['this']->value->error){?> 
<?php echo $_smarty_tpl->tpl_vars['this']->value->error;?>

<?php }?>
<form name="form1" method="post" action="">
	<input type="hidden" value="1" name="enviar" />
	<p>
		<label>Usuario: </label>
		<input type="text" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['this']->value->datos)){?> <?php echo $_smarty_tpl->tpl_vars['this']->value->datos['usuario'];?>
 <?php }?>" />
	</p>

	<p>
		<label>Password: </label>
		<input type="password" name="pass"  />
	</p>

	<p>
		<label></label>
		<input type="submit" value="Enviar" />
	</p>
</form><?php }} ?>