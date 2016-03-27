<?php /* Smarty version Smarty-3.1.8, created on 2016-03-24 19:31:24
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\permissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3356f40789f2e801-28225136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122e13c2ccde688fdff72b26236c45a49beb2475' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\permissions.tpl',
      1 => 1458844280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3356f40789f2e801-28225136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f4078a02dd58_96215708',
  'variables' => 
  array (
    'permissions' => 0,
    'permission' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f4078a02dd58_96215708')) {function content_56f4078a02dd58_96215708($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['permissions']->value)&&count($_smarty_tpl->tpl_vars['permissions']->value)){?>
<table>
    <tr>
        <th>ID</th>
        <th>Permiso</th>
        <th>Llave</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permission']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->key => $_smarty_tpl->tpl_vars['permission']->value){
$_smarty_tpl->tpl_vars['permission']->_loop = true;
?>
    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['permission']->value->getName();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['permission']->value->getPermissionKey();?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/editar_permiso/<?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
">Editar</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/eliminar_permiso/<?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
">Eliminar</a></td>

        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/nuevo_permiso">Agregar Permiso</a></p><?php }} ?>