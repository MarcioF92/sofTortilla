<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 17:26:58
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\post\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1406953ab5f461775f4-92734457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fc8ef25d7814faca9071fff2fdce72399396fa' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\post\\index.tpl',
      1 => 1404678411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406953ab5f461775f4-92734457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ab5f461f4590_51494858',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ab5f461f4590_51494858')) {function content_53ab5f461f4590_51494858($_smarty_tpl) {?><h2>Bienvenido Piyo - Posts</h2>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>

<table>

<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
</td>
		<td>
			<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['imagen'])){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" target="_blank">
					<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
">					
				</a>
			<?php }?>
		</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['idpost'];?>
">Editar Post</a></td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['idpost'];?>
">Eliminar Post</a></td>
	</tr>
<?php } ?>

</table>

<?php }else{ ?>

	<p>No hay posts</p>

<?php }?>


<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>


<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('nuevo_post')){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Agregar Post</a> <!-- BASE_URL para usar el mismo controlador pero con otra función -->
<?php }?>

<!--<?php if (Session::accesoViewEstricto(array('usuario'))){?>-->



<!--<?php }?>-->

<br>

<?php }} ?>