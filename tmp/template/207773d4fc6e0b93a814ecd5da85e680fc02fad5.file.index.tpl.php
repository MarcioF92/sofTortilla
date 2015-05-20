<?php /* Smarty version Smarty-3.1.8, created on 2014-11-17 01:08:32
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242854693b41192658-93246323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '207773d4fc6e0b93a814ecd5da85e680fc02fad5' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\login\\index.tpl',
      1 => 1416182910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242854693b41192658-93246323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54693b411daac9_60772484',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54693b411daac9_60772484')) {function content_54693b411daac9_60772484($_smarty_tpl) {?><form name="form1" method="post" action="">
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