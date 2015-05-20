<?php /* Smarty version Smarty-3.1.8, created on 2014-08-12 19:50:09
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\modules\configuracion\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311853ea9a21977ce9-31111141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26335534a8d5338d526e1a5909982abf9f4efef8' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\modules\\configuracion\\views\\acl\\editar_role.tpl',
      1 => 1404690690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311853ea9a21977ce9-31111141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53ea9a219b6786_11004529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea9a219b6786_11004529')) {function content_53ea9a219b6786_11004529($_smarty_tpl) {?><h2>Nuevo Role</h2>

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