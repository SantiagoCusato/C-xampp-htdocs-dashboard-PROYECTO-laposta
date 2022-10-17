<?php
/* Smarty version 4.2.1, created on 2022-10-15 06:20:37
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\EditarFormulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a35152fba14_29963946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20b4a632817a27eff264309800b0e376599aea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\EditarFormulario.tpl',
      1 => 1665806377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634a35152fba14_29963946 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
   <input name='familiaMod'type = "number"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['instrumento']->value->fk_id;?>
"> 
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
