<?php
/* Smarty version 4.2.1, created on 2022-10-15 07:07:07
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\MostrarInstrumentos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a3ffb5ae861_56355280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014f2aae4013dcc2a11219cbadaab4b200cf80b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\MostrarInstrumentos.tpl',
      1 => 1665810423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:FormularioAgregar.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634a3ffb5ae861_56355280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:FormularioAgregar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumentos']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
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
      <td><a href="instrumento/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value->instrumento;?>
.</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id_fk;?>
</td>
    </tr>
  
    </tr>
  </tbody>
</table>
    <?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
    <a href='edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
' type='button' class='btn btn-danger'>Modificar</a>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </table>
     
  <?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
