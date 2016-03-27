<?php /* Smarty version Smarty-3.1.8, created on 2016-03-20 19:33:54
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230956eeeafd44c1e5-95754665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3598b05fc94d7f18ecb7f2a76e7e07e6254a5943' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\editar_role.tpl',
      1 => 1458498833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230956eeeafd44c1e5-95754665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56eeeafd47b057_46980347',
  'variables' => 
  array (
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eeeafd47b057_46980347')) {function content_56eeeafd47b057_46980347($_smarty_tpl) {?><form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    <p>
        Role: <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['role']->value)){?><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
<?php }?>" />
    </p>
    
    <p>
       <input type="submit" value="Editar" />
    </p>
</form><?php }} ?>