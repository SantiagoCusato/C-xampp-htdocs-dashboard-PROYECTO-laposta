<?php
/* Smarty version 4.2.1, created on 2022-10-16 08:01:56
  from 'C:\xampp\htdocs\dashboard\PROYECTO\laposta\app\Helper\helper.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b9e5435d604_20882957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9819658d7c8f27cb7878273a0c5a290a5fa7660d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\PROYECTO\\laposta\\app\\Helper\\helper.php',
      1 => 1665877772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b9e5435d604_20882957 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


class UsuarioHelper {

    public function ChekeoInicio() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 
    public function PreguntarUsuario(){
        if(!isset($_SESSION['IS_LOGGED'])){
            session_start();
        }
    }
}<?php }
}
