<?php /* Smarty version Smarty-3.1.8, created on 2016-03-20 20:00:02
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111656ed79ede992c7-52203966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb074f8072647c441ccbc2252346e04e69f10d' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\nuevo_role.tpl',
      1 => 1458500393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111656ed79ede992c7-52203966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56ed79ee040158_00049612',
  'variables' => 
  array (
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ed79ee040158_00049612')) {function content_56ed79ee040158_00049612($_smarty_tpl) {?><h2>Nuevo Role</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Role: <input type="text" name="role" value="<?php if (isset($_smarty_tpl->tpl_vars['role']->value)){?><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
<?php }?>" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>