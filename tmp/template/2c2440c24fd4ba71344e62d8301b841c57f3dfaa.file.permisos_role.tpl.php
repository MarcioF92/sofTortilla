<?php /* Smarty version Smarty-3.1.8, created on 2016-03-20 22:51:51
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:377456ef079ca129e7-50822393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c2440c24fd4ba71344e62d8301b841c57f3dfaa' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\permisos_role.tpl',
      1 => 1458510022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377456ef079ca129e7-50822393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ef079ca60d81_60284657',
  'variables' => 
  array (
    'role' => 0,
    'permissions' => 0,
    'permission' => 0,
    'permissionsRole' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ef079ca60d81_60284657')) {function content_56ef079ca60d81_60284657($_smarty_tpl) {?><h2>Gestión de permisos de role</h2>

<?php if (isset($_smarty_tpl->tpl_vars['role']->value)){?>
    <h3>Role: <?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</h3>

    <p>Permisos: </p>

    <form name="form1" method="post" action="">
        <input type="hidden" value="1" name="guardar" />
        
        <?php if (isset($_smarty_tpl->tpl_vars['permissions']->value)){?>
        <table>
            <tr>
                <th>Permiso</th>
                <th>Habilitado</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permission']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->key => $_smarty_tpl->tpl_vars['permission']->value){
$_smarty_tpl->tpl_vars['permission']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['permission']->value->getName();?>
</td>
                    
                    <td>
                        <input type="checkbox" name="permission_<?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['permissionsRole']->value->contains($_smarty_tpl->tpl_vars['permission']->value)){?>checked<?php }?> />
                    </td>
                    
                </tr>

            <?php } ?>
        </table>
        <?php }?>

        <p><input type="submit" value="Guardar" /></p>
    </form>
<?php }else{ ?>
    No existe Role
<?php }?><?php }} ?>