<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 20:17:48
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081453eaa09cbb41e5-58608878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3d5b1160cfae87133b888b327effaf4dc0ed282' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\login\\index.tpl',
      1 => 1407199156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081453eaa09cbb41e5-58608878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53eaa09cc0dab5_45227051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eaa09cc0dab5_45227051')) {function content_53eaa09cc0dab5_45227051($_smarty_tpl) {?><h2>Iniciar Sesión</h2>
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