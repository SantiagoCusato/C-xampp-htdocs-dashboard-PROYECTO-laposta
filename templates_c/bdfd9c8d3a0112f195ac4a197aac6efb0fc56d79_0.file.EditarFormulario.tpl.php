<?php
/* Smarty version 4.2.1, created on 2022-10-16 17:48:31
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\EditarFormulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c27cfe0cd83_52319084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdfd9c8d3a0112f195ac4a197aac6efb0fc56d79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\EditarFormulario.tpl',
      1 => 1665935308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
  ),
),false)) {
function content_634c27cfe0cd83_52319084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
<form action='update/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">INSTRUMENTO</label>
  <input name='InstrumentoMod' type="text" class="form-control" i placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['instrumento']->value->instrumento;?>
">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PRECIO</label>
  <input name='PrecioMod' type="numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['instrumento']->value->precio;?>
" >
</div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label> 
   <input name='DescripcionMod'type = "text"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['instrumento']->value->descripcion;?>
">
   <label for="exampleFormControlTextarea1" class="form-label">FAMILIA</label> 
   <input name='familiaMod'type = "text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['instrumento']->value->id_fk;?>
"> 
   
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 


</div>
</form>
<?php }?>

<?php }
}
