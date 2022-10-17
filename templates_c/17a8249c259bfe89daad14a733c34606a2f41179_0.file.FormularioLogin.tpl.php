<?php
/* Smarty version 4.2.1, created on 2022-10-15 05:18:49
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\FormularioLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a26998d6be1_27054046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a8249c259bfe89daad14a733c34606a2f41179' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\FormularioLogin.tpl',
      1 => 1665803426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_634a26998d6be1_27054046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' required class="form-control" id="email" name='emailUsuario' aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name='passwordUsuario'>
        </div>

        <?php $_prefixVariable1 = null;
$_smarty_tpl->_assignInScope('error', $_prefixVariable1);
if ($_prefixVariable1) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
