<?php /* Smarty version Smarty-3.1.8, created on 2016-03-24 20:13:03
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\usuarios\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2362256e8a3bf12af37-44412836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62acb0be8db3a54ee613c33223193314692df7c5' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\usuarios\\index.tpl',
      1 => 1458846187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2362256e8a3bf12af37-44412836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56e8a3bf261476_54977532',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e8a3bf261476_54977532')) {function content_56e8a3bf261476_54977532($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['users']->value)&&count($_smarty_tpl->tpl_vars['users']->value)){?>
    <table>
        <tr><td>ID</td>
            <td>Usuario</td>
            <td>Role</td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getIduser();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getUser();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->getRole()->getName();?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/usuarios/permisos/<?php echo $_smarty_tpl->tpl_vars['user']->value->getIduser();?>
">
                   Permisos
                </a>
            </td>
        </tr>
            
        <?php } ?>
    </table>
<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/usuarios/add_user">Agregar Usuario</a><?php }} ?>