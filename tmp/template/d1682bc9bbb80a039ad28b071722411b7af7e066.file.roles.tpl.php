<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 20:39:22
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2426553b9bccea3ed94-40960479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1682bc9bbb80a039ad28b071722411b7af7e066' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\roles.tpl',
      1 => 1404689664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2426553b9bccea3ed94-40960479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9bccea9b034_61527048',
  'variables' => 
  array (
    'roles' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9bccea9b034_61527048')) {function content_53b9bccea9b034_61527048($_smarty_tpl) {?><h2>Administración de Roles</h2>

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)){?>
<table>
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th></th>
        <th></th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['idrole'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['role'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['idrole'];?>
">
                    Permisos
                </a>
            </td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['idrole'];?>
">Editar</td>
        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_role">Agregar Role</a></p><?php }} ?>