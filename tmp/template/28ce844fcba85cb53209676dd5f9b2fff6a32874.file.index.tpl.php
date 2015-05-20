<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:50:01
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454853ea99d59070b7-80549923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ce844fcba85cb53209676dd5f9b2fff6a32874' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\index.tpl',
      1 => 1407883754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454853ea99d59070b7-80549923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ea99d5949f57_52345547',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea99d5949f57_52345547')) {function content_53ea99d5949f57_52345547($_smarty_tpl) {?><h2>Listas de Acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/roles">Administración de roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
configuracion/acl/permisos">Administración de permisos</a></li>
</ul>
<?php }} ?>