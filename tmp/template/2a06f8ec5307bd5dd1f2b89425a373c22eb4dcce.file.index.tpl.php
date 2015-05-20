<?php /* Smarty version Smarty-3.1.8, created on 2015-05-19 01:25:58
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\widgets\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26618555a75064a8309-05665644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a06f8ec5307bd5dd1f2b89425a373c22eb4dcce' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\widgets\\index.tpl',
      1 => 1407885166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26618555a75064a8309-05665644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wids' => 0,
    'w' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_555a7506650ef0_12394178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a7506650ef0_12394178')) {function content_555a7506650ef0_12394178($_smarty_tpl) {?><h2>Widgets</h2>

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
configuracion/widgets/deshabilitar/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwidget'];?>
">Deshabilitar</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/widgets/habilitar/<?php echo $_smarty_tpl->tpl_vars['w']->value['idwidget'];?>
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