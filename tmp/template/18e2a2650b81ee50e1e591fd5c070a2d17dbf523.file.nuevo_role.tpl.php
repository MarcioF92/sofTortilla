<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 20:33:06
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1757453b9dcb2273a87-82259405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18e2a2650b81ee50e1e591fd5c070a2d17dbf523' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\nuevo_role.tpl',
      1 => 1337952114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757453b9dcb2273a87-82259405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9dcb22adaf7_22164924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9dcb22adaf7_22164924')) {function content_53b9dcb22adaf7_22164924($_smarty_tpl) {?><h2>Nuevo Role</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Role: <input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>