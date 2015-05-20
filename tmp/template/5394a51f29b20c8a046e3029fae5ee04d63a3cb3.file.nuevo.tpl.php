<?php /* Smarty version Smarty-3.1.8, created on 2014-08-05 21:21:02
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:858953e16bfe162756-27664154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5394a51f29b20c8a046e3029fae5ee04d63a3cb3' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\post\\nuevo.tpl',
      1 => 1407284366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858953e16bfe162756-27664154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e16bfe1b36e9_47189257',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e16bfe1b36e9_47189257')) {function content_53e16bfe1b36e9_47189257($_smarty_tpl) {?><form id="form1" method="post" action="" enctype="multipart/form-data">

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