<?php /* Smarty version Smarty-3.1.8, created on 2015-05-24 23:12:46
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\modulos\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2819855623ece40e047-17310901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'beb389dfe9940ae42f76fbd7d95ff9530786e2e5' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\modulos\\index.tpl',
      1 => 1407884788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2819855623ece40e047-17310901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modulos' => 0,
    'modulo' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55623ece4cc6b5_06835803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55623ece4cc6b5_06835803')) {function content_55623ece4cc6b5_06835803($_smarty_tpl) {?><h2>Módulos</h2>

<?php if (isset($_smarty_tpl->tpl_vars['modulos']->value)&&count($_smarty_tpl->tpl_vars['modulos']->value)){?>

<table>

<?php  $_smarty_tpl->tpl_vars['modulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modulo']->key => $_smarty_tpl->tpl_vars['modulo']->value){
$_smarty_tpl->tpl_vars['modulo']->_loop = true;
?>
	<tr>
		<td><p><strong><?php echo $_smarty_tpl->tpl_vars['modulo']->value['nombre'];?>
</strong></p>
			<?php if ($_smarty_tpl->tpl_vars['modulo']->value['habilitado']==1){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/modulos/deshabilitar/<?php echo $_smarty_tpl->tpl_vars['modulo']->value['idmodulo'];?>
">Deshabilitar</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/modulos/habilitar/<?php echo $_smarty_tpl->tpl_vars['modulo']->value['idmodulo'];?>
">Habilitar</a>
			<?php }?>
		</td>
		<td><p><?php echo $_smarty_tpl->tpl_vars['modulo']->value['descripcion'];?>
</p>
			<small>Versión: <?php echo $_smarty_tpl->tpl_vars['modulo']->value['version'];?>
 | Autor: <?php echo $_smarty_tpl->tpl_vars['modulo']->value['autor'];?>
</small>
		</td>
	</tr>
<?php } ?>

</table>

<?php }else{ ?>

	<p>No hay módulos</p>

<?php }?>


<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>