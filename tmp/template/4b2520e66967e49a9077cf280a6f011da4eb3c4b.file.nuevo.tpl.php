<?php /* Smarty version Smarty-3.1.8, created on 2014-11-17 01:09:35
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3094354693cbf4329d5-15578201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2520e66967e49a9077cf280a6f011da4eb3c4b' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\post\\nuevo.tpl',
      1 => 1407284366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3094354693cbf4329d5-15578201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54693cbf474c06_13650484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54693cbf474c06_13650484')) {function content_54693cbf474c06_13650484($_smarty_tpl) {?><form id="form1" method="post" action="" enctype="multipart/form-data">

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