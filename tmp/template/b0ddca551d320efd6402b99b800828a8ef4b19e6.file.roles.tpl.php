<?php /* Smarty version Smarty-3.1.8, created on 2016-03-20 20:52:08
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:479756ed79b2b40308-07662753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ddca551d320efd6402b99b800828a8ef4b19e6' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\roles.tpl',
      1 => 1458503526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '479756ed79b2b40308-07662753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ed79b2d2c707_94422354',
  'variables' => 
  array (
    'roles' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ed79b2d2c707_94422354')) {function content_56ed79b2d2c707_94422354($_smarty_tpl) {?><h2>Administración de Roles</h2>

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)){?>
<table>
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
    
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value->getIdrole();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value->getName();?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value->getIdrole();?>
">
                    Permisos
                </a>
            </td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/editar_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value->getIdrole();?>
">Editar</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/eliminar_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value->getIdrole();?>
">Eliminar</td>
        </tr>
        
    <?php } ?>
    
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/nuevo_role">Agregar Role</a></p><?php }} ?>