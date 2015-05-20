<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:50:20
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634853ea9a2ca0bbe0-16998864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6fd0a24f367f017fecdb131397b2672efb3705' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\nuevo_permiso.tpl',
      1 => 1337952102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634853ea9a2ca0bbe0-16998864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ea9a2ca5a0d8_74685372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea9a2ca5a0d8_74685372')) {function content_53ea9a2ca5a0d8_74685372($_smarty_tpl) {?><h2>Agregar Permiso</h2>

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