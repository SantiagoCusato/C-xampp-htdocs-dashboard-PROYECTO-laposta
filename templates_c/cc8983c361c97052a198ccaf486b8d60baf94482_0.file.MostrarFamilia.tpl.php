<?php
/* Smarty version 4.2.1, created on 2022-10-15 06:03:13
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\MostrarFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a3101c3ea70_21779034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8983c361c97052a198ccaf486b8d60baf94482' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\MostrarFamilia.tpl',
      1 => 1665806588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:FormularioAgregarFamilia.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634a3101c3ea70_21779034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:FormularioAgregarFamilia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list-group list-group-horizontal">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['familia']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <li class="list-group-item">.<?php echo $_smarty_tpl->tpl_vars['item']->value->familia;?>
.</li>
  <li class="list-group-item">.<?php echo $_smarty_tpl->tpl_vars['item']->value->informacion;?>
.</li>
  <?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
  <a href='deleteFamilia/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
  <a href='editFamilia/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
' type='button' class='btn btn-danger'>Modificar</a>
  <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
