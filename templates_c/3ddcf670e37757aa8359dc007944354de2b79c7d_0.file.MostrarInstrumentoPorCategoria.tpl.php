<?php
/* Smarty version 4.2.1, created on 2022-10-16 18:40:00
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\MostrarInstrumentoPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c33e03031f0_82493568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ddcf670e37757aa8359dc007944354de2b79c7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\MostrarInstrumentoPorCategoria.tpl',
      1 => 1665938312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c33e03031f0_82493568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumentoCategoria']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <p><?php echo $_smarty_tpl->tpl_vars['item']->value->instrumento;?>
:</p> 
          <span> - Precio <?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
 - Descripcion <?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</span>
        
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
