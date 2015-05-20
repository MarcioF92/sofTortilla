<?php /* Smarty version Smarty-3.1.8, created on 2014-08-05 18:58:54
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\acl\permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2102853e1539e920654-18346097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5543fafdb27dc279d8c94169fbc4be9c88d5e521' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\acl\\permisos.tpl',
      1 => 1337951736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102853e1539e920654-18346097',
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
  'unifunc' => 'content_53e1539e97de39_47937567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1539e97de39_47937567')) {function content_53e1539e97de39_47937567($_smarty_tpl) {?><h2>Administración de permisos</h2>

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