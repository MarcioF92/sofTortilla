<?php /* Smarty version Smarty-3.1.8, created on 2014-09-05 12:34:40
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\post\ajax\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56415409d81099bd34-06264459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc131957da38611777fef3b941015a40e959519a' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\post\\ajax\\prueba.tpl',
      1 => 1405036415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56415409d81099bd34-06264459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5409d810a4fd06_15658755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5409d810a4fd06_15658755')) {function content_5409d810a4fd06_15658755($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
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