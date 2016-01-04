<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 23:50:50
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\login\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129025688544acbcde1-15028222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97d935ebeab854729fb0566c275a68fba000dae' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\login\\views\\index\\index.tpl',
      1 => 1451692875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129025688544acbcde1-15028222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5688544acf0ba3_52692296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688544acf0ba3_52692296')) {function content_5688544acf0ba3_52692296($_smarty_tpl) {?><form name="form1" method="post" action="">
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