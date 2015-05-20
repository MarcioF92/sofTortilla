<?php /* Smarty version Smarty-3.1.8, created on 2014-07-06 20:51:32
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:680453b9df350d3839-67843584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff899abb3cf1c16d7d4cdc5bfb42c71b2fee60d3' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\acl\\editar_role.tpl',
      1 => 1404690690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '680453b9df350d3839-67843584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53b9df35105818_60704874',
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9df35105818_60704874')) {function content_53b9df35105818_60704874($_smarty_tpl) {?><h2>Nuevo Role</h2>

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