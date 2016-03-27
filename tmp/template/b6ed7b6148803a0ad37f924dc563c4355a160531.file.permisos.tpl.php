<?php /* Smarty version Smarty-3.1.8, created on 2016-03-26 20:03:45
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\usuarios\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:821456f58be3648c77-89460811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6ed7b6148803a0ad37f924dc563c4355a160531' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\usuarios\\permisos.tpl',
      1 => 1459033420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '821456f58be3648c77-89460811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f58be3695998_75199192',
  'variables' => 
  array (
    'user' => 0,
    'permissions' => 0,
    'permission' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f58be3695998_75199192')) {function content_56f58be3695998_75199192($_smarty_tpl) {?><h3>Usuario: <?php echo $_smarty_tpl->tpl_vars['user']->value->getUser();?>
<br />Role:<?php echo $_smarty_tpl->tpl_vars['user']->value->getRole()->getName();?>
</h3>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    <?php if (isset($_smarty_tpl->tpl_vars['permissions']->value)&&count($_smarty_tpl->tpl_vars['permissions']->value)){?>
    <table>
        <tr>
            <td>Permiso</td>
            <td></td>
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
                <?php if ($_smarty_tpl->tpl_vars['user']->value->getRole()->getPermissions()->contains($_smarty_tpl->tpl_vars['permission']->value)){?>
                    Habilitado por Role
                    <input type="hidden" name="perm_<?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
" value="-1" />
                <?php }else{ ?>
                    <select name="perm_<?php echo $_smarty_tpl->tpl_vars['permission']->value->getIdpermission();?>
">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value->getPermissions()->contains($_smarty_tpl->tpl_vars['permission']->value)){?>selected="selected"<?php }?>>Habilitado</option>
                        <option value="0" <?php if (!$_smarty_tpl->tpl_vars['user']->value->getPermissions()->contains($_smarty_tpl->tpl_vars['permission']->value)){?>selected="selected"<?php }?>>Denegado</option>
                    </select>
                <?php }?>
            </td>
        </tr>
            
        <?php } ?>
    </table>
        <p><input type="submit" value="Guardar" /></p>
<?php }?>
</form><?php }} ?>