<?php /* Smarty version Smarty-3.1.8, created on 2014-07-08 16:44:10
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1889453b9bf40614460-43551470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e8fedc6481667cc2f72cec886c8d6cc4c42792b' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\permisos_role.tpl',
      1 => 1404848586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1889453b9bf40614460-43551470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9bf406874e6_28697355',
  'variables' => 
  array (
    'roles' => 0,
    'permisos' => 0,
    'pr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9bf406874e6_28697355')) {function content_53b9bf406874e6_28697355($_smarty_tpl) {?><h2>Gestión de permisos de role</h2>

<h3>Role: <?php echo $_smarty_tpl->tpl_vars['roles']->value['role'];?>
</h3>

<p>Permisos: </p>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
    <table>
        <tr>
            <th>Permiso</th>
            <th>Habilitado</th>
            <th>Denegado</th>
            <th>Ignorar</th>
        </tr>

        <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>

            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['idpermiso'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?>checked="checked" <?php }?>/></td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['idpermiso'];?>
" value="0" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==''){?>checked="checked" <?php }?>></td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['idpermiso'];?>
" value="x" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==="x"){?>checked="checked" <?php }?>></td>
            </tr>

        <?php } ?>
    </table>
    <?php }?>

    <p><input type="submit" value="Guardar" /></p>
</form><?php }} ?>