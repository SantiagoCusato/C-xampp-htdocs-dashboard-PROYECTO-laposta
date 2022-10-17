<?php
/* Smarty version 4.2.1, created on 2022-10-16 17:41:15
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\EditarFormularioFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c261b9d78a7_32087050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72300ace86ad439615ada53a99d39d6e8af9e751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\EditarFormularioFamilia.tpl',
      1 => 1665934873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c261b9d78a7_32087050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
<form action='updatefamilia/<?php echo $_smarty_tpl->tpl_vars['familia']->value->id;?>
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
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
