<?php /* Smarty version Smarty-3.1.8, created on 2015-06-07 01:13:00
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\themes\default_theme\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3057254693a493a2bc5-58954301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0200e82364cc3f2a788a9358a6d6ca88bb2d1013' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\default.tpl',
      1 => 1433632358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3057254693a493a2bc5-58954301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54693a4953e777_85131069',
  'variables' => 
  array (
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54693a4953e777_85131069')) {function content_54693a4953e777_85131069($_smarty_tpl) {?><!--
Template Name: Default
-->

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="row">
     
        <div class="large-9 columns" role="content">

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        </div>

    </div>

    <aside class="large-3 columns">

        <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    </aside>

        

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>