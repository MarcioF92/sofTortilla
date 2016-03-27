<?php /* Smarty version Smarty-3.1.8, created on 2016-03-24 19:32:25
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1021756f40955c576e7-70224090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47fb85c09609b70604805fb6d58edf010df19677' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\nuevo_permiso.tpl',
      1 => 1458844343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021756f40955c576e7-70224090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56f40955d52997_93919713',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f40955d52997_93919713')) {function content_56f40955d52997_93919713($_smarty_tpl) {?><form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Permiso: <input type="text" name="permiso" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value->getName();?>
<?php }?>" />
    </p>
    
    <p>
        Llave: <input type="text" name="llave" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)){?><?php echo $_smarty_tpl->tpl_vars['datos']->value->getPermissionkey();?>
<?php }?>" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>