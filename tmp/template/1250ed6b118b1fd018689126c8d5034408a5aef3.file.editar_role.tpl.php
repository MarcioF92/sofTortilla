<?php /* Smarty version Smarty-3.1.8, created on 2014-08-08 21:26:35
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2731553e56abb3331b8-18028316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1250ed6b118b1fd018689126c8d5034408a5aef3' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\acl\\editar_role.tpl',
      1 => 1404690690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731553e56abb3331b8-18028316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53e56abb36eca6_59776362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e56abb36eca6_59776362')) {function content_53e56abb36eca6_59776362($_smarty_tpl) {?><h2>Nuevo Role</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    
    <p>
        Role: <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
    </p>
    
    <p>
       <input type="submit" value="Editar" />
    </p>
</form><?php }} ?>