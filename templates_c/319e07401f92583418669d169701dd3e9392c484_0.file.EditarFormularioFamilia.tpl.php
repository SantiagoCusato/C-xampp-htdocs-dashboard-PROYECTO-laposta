<?php
/* Smarty version 4.2.1, created on 2022-10-15 06:00:20
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\EditarFormularioFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a30549eb643_54568973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319e07401f92583418669d169701dd3e9392c484' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\EditarFormularioFamilia.tpl',
      1 => 1665806379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634a30549eb643_54568973 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='updatefamilia/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">FAMILIA</label>
  <input name='familiaMod' type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['familia']->value->familia;?>
">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INFORMACION</label>
  <input name='informacionMod' type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['familia']->value->informacion;?>
">
</div>
  <div class="mb-3"> 
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
