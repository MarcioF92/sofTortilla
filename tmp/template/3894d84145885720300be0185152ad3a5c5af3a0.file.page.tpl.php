<?php /* Smarty version Smarty-3.1.8, created on 2016-01-01 19:47:51
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\themes\default_theme\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141445686c9d7359fc4-63610976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3894d84145885720300be0185152ad3a5c5af3a0' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\page.tpl',
      1 => 1432764818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141445686c9d7359fc4-63610976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_error' => 0,
    '_mensaje' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5686c9d7466551_12544893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686c9d7466551_12544893')) {function content_5686c9d7466551_12544893($_smarty_tpl) {?><!--
Template Name: Posts/Pages
-->

<?php echo $_smarty_tpl->getSubTemplate ("post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


          <div class="row">
     
            <div class="large-9 columns" role="content">
         
              <article>

                <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    
                    <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                    <div id="error"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                    <div id="mensaje"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
                    <?php }?>

                    <div class="title"><h2><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h2></div>

                    <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

                    
                </article>
            </div>

            <aside class="large-3 columns">

                <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            </aside>

        </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>