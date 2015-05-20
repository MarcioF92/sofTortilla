<?php /* Smarty version Smarty-3.1.8, created on 2014-07-10 20:53:38
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\post\ajax\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:489753beedd64951c1-51701626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9021e49925eca733c130422c7d5b303ae2a07dc' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\post\\ajax\\prueba.tpl',
      1 => 1405036415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489753beedd64951c1-51701626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53beedd65904d7_54018122',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53beedd65904d7_54018122')) {function content_53beedd65904d7_54018122($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Pais</th>
                <th>Ciudad</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['idpost'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['pais'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['ciudad'];?>
</td>
                </tr>
            <?php } ?>
        </table>
    <?php }else{ ?>

        <p><strong>No hay posts!</strong></p>

    <?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>