<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:16:05
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\FormularioAgregarFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349dfa5bb77b8_34125204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '149eb13b973a36bbb4414f11c58b03ecf128b8ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\FormularioAgregarFamilia.tpl',
      1 => 1665785748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349dfa5bb77b8_34125204 (Smarty_Internal_Template $_smarty_tpl) {
?><form action='addfamilia' method='POST'>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">FAMILIA</label>
  <input name='familia' type="text" class="form-control" i placeholder="">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">INFORMACION</label>
  <input name='informacion' type="text" class="form-control" ></input>
</div>
   <button type="submit" class="btn btn-primary btn-lg">Enviar</button> 

</div>
</form><?php }
}
