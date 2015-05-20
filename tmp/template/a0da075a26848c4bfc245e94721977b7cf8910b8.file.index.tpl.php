<?php /* Smarty version Smarty-3.1.8, created on 2014-08-08 20:31:02
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\widgetsconfig\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410053e54a64110b43-79093913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0da075a26848c4bfc245e94721977b7cf8910b8' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\widgetsconfig\\index.tpl',
      1 => 1407540660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410053e54a64110b43-79093913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e54a641a4709_51961568',
  'variables' => 
  array (
    'wids' => 0,
    'w' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e54a641a4709_51961568')) {function content_53e54a641a4709_51961568($_smarty_tpl) {?><h2>Widgets</h2>

<?php if (isset($_smarty_tpl->tpl_vars['wids']->value)&&count($_smarty_tpl->tpl_vars['wids']->value)){?>


<table>

<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['w']->key;
?>
	<tr>
		<td><p><strong><?php echo $_smarty_tpl->tpl_vars['w']->value['nombre'];?>
</strong></p>
			<?php if ($_smarty_tpl->tpl_vars['w']->value['habilitado']==1){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
widgetsconfig/deshabilitar/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwidget'];?>
">Deshabilitar</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
widgetsconfig/habilitar/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwidget'];?>
">Habilitar</a>
			<?php }?>
		</td>
		<td><p><?php echo $_smarty_tpl->tpl_vars['w']->value['descripcion'];?>
</p>
			<small>Versión: <?php echo $_smarty_tpl->tpl_vars['w']->value['version'];?>
 | Autor: <?php echo $_smarty_tpl->tpl_vars['w']->value['autor'];?>
</small>
		</td>
	</tr>
<?php } ?>

</table>

<?php }else{ ?>

	<p>No hay Widgets</p>

<?php }?>


<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>