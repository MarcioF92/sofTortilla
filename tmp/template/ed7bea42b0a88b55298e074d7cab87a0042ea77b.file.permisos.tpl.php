<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 18:24:13
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1678253b9be7d0ff1e6-91026017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7bea42b0a88b55298e074d7cab87a0042ea77b' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\permisos.tpl',
      1 => 1337951736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1678253b9be7d0ff1e6-91026017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permisos' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9be7d157b83_20697279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9be7d157b83_20697279')) {function content_53b9be7d157b83_20697279($_smarty_tpl) {?><h2>Administración de permisos</h2>

<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
<table>
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th></th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['id_permiso'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['permiso'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['key'];?>
</td>
            <td>Editar</td>
        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_permiso">Agregar Permiso</a></p><?php }} ?>