<?php /* Smarty version Smarty-3.1.8, created on 2014-07-08 20:05:47
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\modules\usuarios\views\index\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774453bc794b62b6c8-61898963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68b20f9c1699e15c9868226e840a7651c77b109' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\modules\\usuarios\\views\\index\\permisos.tpl',
      1 => 1404850041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774453bc794b62b6c8-61898963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'permisos' => 0,
    'pr' => 0,
    'role' => 0,
    'usuario' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53bc794b6cb2d6_19419214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc794b6cb2d6_19419214')) {function content_53bc794b6cb2d6_19419214($_smarty_tpl) {?><h2>Permisos de Usuario</h2>

<h3>Usuario: <?php echo $_smarty_tpl->tpl_vars['info']->value['usuario'];?>
<br />Role:<?php echo $_smarty_tpl->tpl_vars['info']->value['role'];?>
</h3>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
    <table>
        <tr><td>Permiso</td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1){?>
                <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("habilitado", null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("denegado", null, 0);?>
            <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['permiso'];?>
</td>
            
            <td>
                <select name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['idpermiso'];?>
">
                    <option value="x"<?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']){?> selected="selected"<?php }?>>Por defecto(<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
)</option>
                    <option value="1"<?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==1&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Habilitado</option>
                    <option value=""<?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['valor']==0&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['pr']->value]['heredado']=='')){?> selected="selected"<?php }?>>Denegado</option>
                </select>
            </td>
        </tr>
            
        <?php } ?>
    </table>
        <p><input type="submit" value="guardar" /></p>
<?php }?>
</form><?php }} ?>