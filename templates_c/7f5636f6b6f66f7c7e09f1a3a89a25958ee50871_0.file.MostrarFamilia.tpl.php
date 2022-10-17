<?php
/* Smarty version 4.2.1, created on 2022-10-16 18:10:44
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\MostrarFamilia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c2d048010a9_09643900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5636f6b6f66f7c7e09f1a3a89a25958ee50871' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\MostrarFamilia.tpl',
      1 => 1665936636,
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
function content_634c2d048010a9_09643900 (Smarty_Internal_Template $_smarty_tpl) {
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
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value->familia;?>
</li>
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value->informacion;?>
</li>
  <?php if ((isset($_SESSION['USER_ID']))) {?>
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
