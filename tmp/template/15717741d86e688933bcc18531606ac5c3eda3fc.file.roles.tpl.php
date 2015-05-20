<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:50:03
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787253ea9a1beb8096-41442469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15717741d86e688933bcc18531606ac5c3eda3fc' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\roles.tpl',
      1 => 1407883794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787253ea9a1beb8096-41442469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ea9a1bf29e84_01717376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea9a1bf29e84_01717376')) {function content_53ea9a1bf29e84_01717376($_smarty_tpl) {?><h2>Administración de Roles</h2>

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
configuracion/acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['idrole'];?>
">
                    Permisos
                </a>
            </td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['idrole'];?>
">Editar</td>
        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/nuevo_role">Agregar Role</a></p><?php }} ?>