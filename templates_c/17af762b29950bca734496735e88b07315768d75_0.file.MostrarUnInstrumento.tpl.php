<?php
/* Smarty version 4.2.1, created on 2022-10-16 01:33:19
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\templates\MostrarUnInstrumento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b433fec3de7_79151803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17af762b29950bca734496735e88b07315768d75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\templates\\MostrarUnInstrumento.tpl',
      1 => 1665809032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634b433fec3de7_79151803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
  <thead>
    <tr>
     <th scope="col"></th>
      <th scope="col">INSTRUMENTO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_smarty_tpl->tpl_vars['instrumento']->value->instrumento;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['instrumento']->value->precio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['instrumento']->value->descripcion;?>
</td>
    </tr>
  
    </tr>
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
