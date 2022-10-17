<?php
/* Smarty version 4.2.1, created on 2022-10-16 08:25:53
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\FormularioAgregarFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ba3f16d00c7_47265610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e72f43a9f090392673c4563a4da9cc0b922d2193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\FormularioAgregarFamilia.tpl',
      1 => 1665901550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ba3f16d00c7_47265610 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ID']))) {?>
<form action='addfamilia' method='POST'>
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
</form>
<?php }
}
}
