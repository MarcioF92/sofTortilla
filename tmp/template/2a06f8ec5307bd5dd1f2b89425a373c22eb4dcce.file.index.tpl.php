<?php /* Smarty version Smarty-3.1.8, created on 2016-03-30 21:57:55
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\widgets\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2932156fc5c7de41339-47301702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a06f8ec5307bd5dd1f2b89425a373c22eb4dcce' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\widgets\\index.tpl',
      1 => 1459385872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2932156fc5c7de41339-47301702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56fc5c7e005610_80919948',
  'variables' => 
  array (
    'widgetList' => 0,
    'widget' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fc5c7e005610_80919948')) {function content_56fc5c7e005610_80919948($_smarty_tpl) {?><table>
<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgetList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>

	<tr>
		<td><p><strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['information']['name'];?>
</strong></p>
			<?php if ($_smarty_tpl->tpl_vars['widget']->value['activated']){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/widgets/disactivate/<?php echo $_smarty_tpl->tpl_vars['widget']->value['directory'];?>
/">Deshabilitar</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/widgets/activate/<?php echo $_smarty_tpl->tpl_vars['widget']->value['directory'];?>
">Habilitar</a>
			<?php }?>
		</td>
		<td><p><?php echo $_smarty_tpl->tpl_vars['widget']->value['information']['description'];?>
</p>
			<small>Versión: <?php echo $_smarty_tpl->tpl_vars['widget']->value['information']['version'];?>
 | Autor: <?php echo $_smarty_tpl->tpl_vars['widget']->value['information']['author'];?>
</small>
		</td>
	</tr>
<?php } ?>

</table><?php }} ?>