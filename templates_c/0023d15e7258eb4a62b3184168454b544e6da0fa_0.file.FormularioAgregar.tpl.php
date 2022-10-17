<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:58:40
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\FormularioAgregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e9a02b0c40_00196569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0023d15e7258eb4a62b3184168454b544e6da0fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\FormularioAgregar.tpl',
      1 => 1665788199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e9a02b0c40_00196569 (Smarty_Internal_Template $_smarty_tpl) {
?><form action='add' method='POST'>
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
