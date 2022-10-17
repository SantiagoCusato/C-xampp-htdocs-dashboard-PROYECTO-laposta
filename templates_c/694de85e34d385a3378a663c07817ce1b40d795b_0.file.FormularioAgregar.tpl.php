<?php
/* Smarty version 4.2.1, created on 2022-10-17 14:00:12
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\FormularioAgregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d43cc583bf4_65322084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694de85e34d385a3378a663c07817ce1b40d795b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\FormularioAgregar.tpl',
      1 => 1666007897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d43cc583bf4_65322084 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ID']))) {?>
<form action='add' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">INSTRUMENTO</label>
  <input name='1' type="text" class="form-control" i placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">PRECIO</label>
  <input name='2' type="number" class="form-control" ></input>
</div>
  <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label> 
   <input name='3'type = "text"class="form-control" ></input> 
   <div class="mb-3">
   <label for="exampleFormControlTextarea1" class="form-label">FAMILIA</label> 
   <input name='4'type="number"class="form-control" ></input>
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form>
<?php }
}
}
