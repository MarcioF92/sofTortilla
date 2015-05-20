<?php /* Smarty version Smarty-3.1.8, created on 2014-06-30 18:35:28
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057953b1d803743a17-13116165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9215273d3c2cbad4deacd34bccc826c1cfba04c2' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\post\\nuevo.tpl',
      1 => 1404164114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2057953b1d803743a17-13116165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b1d80375eb14_93482882',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b1d80375eb14_93482882')) {function content_53b1d80375eb14_93482882($_smarty_tpl) {?><form id="form1" method="post" action="" enctype="multipart/form-data">

	<input name="guardar" type="hidden" value="1" />
	<p>Título: <br>
	<input type="text" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['titulo'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
 <?php }?>" /></p>

	<p>Cuerpo: <br>
	<textarea type="text" name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['cuerpo'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
 <?php }?> </textarea></p>

	<input type="file" name="imagen" />

	<input type="submit" value="Guardar" />
</form><?php }} ?>