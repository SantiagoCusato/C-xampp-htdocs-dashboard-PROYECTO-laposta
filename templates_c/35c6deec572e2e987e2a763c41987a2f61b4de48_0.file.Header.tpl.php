<?php
/* Smarty version 4.2.1, created on 2022-10-15 08:32:34
  from 'C:\xampp\htdocs\dashboard\PROYECTO\TrabajopracticoEspecial\proyecto\templates\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a540211af63_02482008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c6deec572e2e987e2a763c41987a2f61b4de48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\TrabajopracticoEspecial\\proyecto\\templates\\Header.tpl',
      1 => 1665815514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634a540211af63_02482008 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link  href="style.css">
    <title>Document</title>
</head>
<body class="body">
<header>
<nav class="navbar navbar-expand-lg bg-light">
 <div class="container-fluid">
      <a class="navbar-brand" href="home">PENTAGRAMA</a>
  <ul class="nav justify-content-end">
  <li class="nav-item">
  </li>
  <li class="nav-item">
  <a class="navbar-brand" href= 'validate'>Usuario</a>
  </li>
  <li class="nav-item">
  <a class="navbar-brand" href='home'>Instrumentos</a>
  </li>
  
  <div class="dropdown">
                <a class="btn dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Familia de Instrumentos</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="nav-item"><a class="nav-link text-black" href='homeFamilia'>TODAS</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <li><a class="dropdown-item" href="filtro/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->familia;?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </ul>
                </li>
            
  </div>
  
  
</ul>
</nav> 
</header>

<?php }
}
