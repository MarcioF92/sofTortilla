<?php /* Smarty version Smarty-3.1.8, created on 2014-06-29 19:27:15
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\ajax\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2979553af2666d19a99-33918182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5b8dca4fabad422968d3b13d0e5936e2fba8ce5' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\ajax\\index.tpl',
      1 => 1404080830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2979553af2666d19a99-33918182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53af2666da13b5_02437798',
  'variables' => 
  array (
    'paises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53af2666da13b5_02437798')) {function content_53af2666da13b5_02437798($_smarty_tpl) {?><h2>Ejemplo de AJAX gato</h2>

<form>
	País:
	<select id="pais">
		<option value="">Seleccione</option>
		<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['idpais'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
		<?php } ?>
	</select>

	<br>

	Ciudad:
	<select id="ciudad">
	</select>

	<br>

	Ciudad a insertar:
	<input type="text" id="ins_ciudad" />
	<input type="button" value="Insertar" id="btn_insertar" />
</form><?php }} ?>