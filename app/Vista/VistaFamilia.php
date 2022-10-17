<?php 
require_once "libs/smarty-4.2.1/libs/Smarty.class.php";
class VistaFamilia {
    private $smarty;
    public function __construct(){
    $this->smarty = new Smarty();
    }
    function MostrarFamiliaVista($familia, $email = null){
        $this->smarty->assign('email', $email);
        $this->smarty->assign("familia", $familia);
        $this->smarty->display("MostrarFamilia.tpl");
    }
    function MostrarFormularioEditarFamilia($familia,$id, $email = null){
        $this->smarty->assign('email', $email);
        $this->smarty->assign("familia",$familia);
        $this->smarty->assign("id",$id);
        $this->smarty->display("EditarFormularioFamilia.tpl");
    }
}