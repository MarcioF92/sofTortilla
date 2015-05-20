<?php /* Smarty version Smarty-3.1.8, created on 2014-09-05 12:34:34
         compiled from "D:\Marcio\Programas\XAMPP\xampp\htdocs\Frameworks\flight_editado\views\post\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308915409d80ac877a2-23067457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8223ec472b30a4aa719c17cff8b04b5ad4ea6cae' => 
    array (
      0 => 'D:\\Marcio\\Programas\\XAMPP\\xampp\\htdocs\\Frameworks\\flight_editado\\views\\post\\prueba.tpl',
      1 => 1405106816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308915409d80ac877a2-23067457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paises' => 0,
    'ps' => 0,
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5409d80b056707_02233458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5409d80b056707_02233458')) {function content_5409d80b056707_02233458($_smarty_tpl) {?><h2>Prueba</h2>

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