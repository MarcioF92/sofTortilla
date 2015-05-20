<?php /* Smarty version Smarty-3.1.8, created on 2014-08-05 18:58:34
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:683953e1538a375785-44771756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af028bc10989b560bcee8a1b72026178d846980' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\acl\\permisos_role.tpl',
      1 => 1404848586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683953e1538a375785-44771756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'permisos' => 0,
    'pr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e1538a46c4b2_37697019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1538a46c4b2_37697019')) {function content_53e1538a46c4b2_37697019($_smarty_tpl) {?><h2>Gestión de permisos de role</h2>

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