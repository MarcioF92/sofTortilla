<?php /* Smarty version Smarty-3.1.8, created on 2014-08-08 21:19:32
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109553e56914d03787-23506501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c270b296c3be22ed3c30dea8b03372d9a39c2798' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\acl\\nuevo_permiso.tpl',
      1 => 1337952102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109553e56914d03787-23506501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e56914d4e795_64709285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e56914d4e795_64709285')) {function content_53e56914d4e795_64709285($_smarty_tpl) {?><h2>Agregar Permiso</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Permiso: <input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        Llave: <input type="text" name="llave" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['llave'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
       <input type="submit" value="Guardar" />
    </p>
</form><?php }} ?>