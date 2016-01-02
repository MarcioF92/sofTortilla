<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 15:46:49
         compiled from "D:\Marcio\Programas\xampp_1_8\htdocs\Frameworks\flight_editado\views\themes\default_theme\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243475687e2d96782b3-10424312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0600f6bad78e7b25ea3cd027b2ee283b6d2bdf76' => 
    array (
      0 => 'D:\\Marcio\\Programas\\xampp_1_8\\htdocs\\Frameworks\\flight_editado\\views\\themes\\default_theme\\footer.tpl',
      1 => 1451692959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243475687e2d96782b3-10424312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'plg' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5687e2d96e3046_42122290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5687e2d96e3046_42122290')) {function content_5687e2d96e3046_42122290($_smarty_tpl) {?>        </div> <!-- Content -->

        <footer class="row">
            <div class="large-12 columns">
              <hr/>
              <div class="row">
                <div class="large-6 columns">
                  <p>Copyright &copy; 2015 <a href="http://www.dlancedu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
</p>
                </div>
              </div>
            </div>
         </footer>

        <!-- javascript -->
        <script type="text/javascript">
            var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
';
        </script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin'])){?>
            <?php  $_smarty_tpl->tpl_vars['plg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlugin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plg']->key => $_smarty_tpl->tpl_vars['plg']->value){
$_smarty_tpl->tpl_vars['plg']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['plg']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
            <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
            <?php } ?>
        <?php }?>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['path_js'];?>
vendor/jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['path_js'];?>
foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html><?php }} ?>