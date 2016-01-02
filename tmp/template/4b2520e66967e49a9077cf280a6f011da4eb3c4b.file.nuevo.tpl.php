<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 15:46:49
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281815687e2d95e46d2-64275669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2520e66967e49a9077cf280a6f011da4eb3c4b' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\post\\nuevo.tpl',
      1 => 1451745983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281815687e2d95e46d2-64275669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5687e2d960caa7_70882635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5687e2d960caa7_70882635')) {function content_5687e2d960caa7_70882635($_smarty_tpl) {?><form id="form1" method="post" action="" enctype="multipart/form-data">

	<input name="guardar" type="hidden" value="1" />
	<p>Título: <br>
	<input type="text" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['title'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['title'];?>
 <?php }?>" /></p>

	<p>Cuerpo: <br>
	<textarea type="text" name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['content'])){?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['content'];?>
 <?php }?> </textarea></p>

	<input type="file" name="imagen" />

	<input type="submit" value="Guardar" />
</form><?php }} ?>