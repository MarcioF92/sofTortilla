<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 15:46:49
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\themes\default_theme\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299945687e2d9622315-82891446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ba06f667c05bd4a2ebf7a8fa2291be0bb3d71c' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\sidebar.tpl',
      1 => 1432158310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299945687e2d9622315-82891446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgets' => 0,
    'wd' => 0,
    'menues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5687e2d96616a0_91651329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5687e2d96616a0_91651329')) {function content_5687e2d96616a0_91651329($_smarty_tpl) {?><!--<?php if (isset($_smarty_tpl->tpl_vars['widgets']->value['sidebar'])){?>
    <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

    <?php } ?>
<?php }?>-->
<?php if (isset($_smarty_tpl->tpl_vars['menues']->value['sidebar'])){?>
    <?php  $_smarty_tpl->tpl_vars['wd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menues']->value['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wd']->key => $_smarty_tpl->tpl_vars['wd']->value){
$_smarty_tpl->tpl_vars['wd']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['wd']->value;?>

    <?php } ?>
<?php }?><?php }} ?>