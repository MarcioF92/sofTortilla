<?php /* Smarty version Smarty-3.1.8, created on 2014-07-11 16:27:06
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight\views\post\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1891053bc82828196c7-78158127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3107eda0eb4a37f9809dfc40b38c45e94077ef70' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight\\views\\post\\prueba.tpl',
      1 => 1405106816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1891053bc82828196c7-78158127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53bc82828f7b36_55117611',
  'variables' => 
  array (
    'paises' => 0,
    'ps' => 0,
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bc82828f7b36_55117611')) {function content_53bc82828f7b36_55117611($_smarty_tpl) {?><h2>Prueba</h2>

<div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn"><i class="icon-search">Buscar</i></button>
        
        <br><br>
        
        <select name="pais" id="pais"><option value="x"> - seleccione pais - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['idpais'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['nombre'];?>
</option>
            <?php } ?>
        </select>
        <select name="ciudad" id="ciudad"><option value=""> - seleccione ciudad - </option></select>
    </form>
</div>

<div id="lista_registros">
    <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
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


</div>

<?php }} ?>