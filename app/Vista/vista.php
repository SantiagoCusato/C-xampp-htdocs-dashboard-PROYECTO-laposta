<?php 
require_once "libs/smarty-4.2.1/libs/Smarty.class.php";
class vista {
private $smarty;

public function __construct(){
    $this->smarty = new Smarty();
}
function MostrarInstumentosView($familia,$instrumentos,$error = null){
    $this->smarty->assign("familia", $familia);
    $this->smarty->assign("error", $error);
    $this->smarty->assign("instrumentos",$instrumentos);
    $this->smarty->display("MostrarInstrumentos.tpl");


}
function MostrarUnInstrumentoView($familia,$instrumento, $error=null ){
    $this->smarty->assign("familia", $familia);
    $this->smarty->assign("error",$error);
    $this->smarty->assign("instrumento",$instrumento);
    $this->smarty->display("MostrarUnInstrumento.tpl");

}
function MostrarFormularioEditar($familia, $instrumento,$id,$error=null){
    $this->smarty->assign("familia", $familia);
    $this->smarty->assign("error",$error);
    $this->smarty->assign("id",$id);
    $this->smarty->assign("instrumento", $instrumento);
    $this->smarty->display("EditarFormulario.tpl");
}
function MostrarInstrumentoPorCategoriaView($familia,$instrumentoCategoria,$error=null){
    $this->smarty->assign("familia", $familia);
    $this->smarty->assign("error", $error);
    $this->smarty->assign("instrumentoCategoria",$instrumentoCategoria);
    //$this->smarty->assign("categorias",$categorias);
    $this->smarty->display("MostrarInstrumentoPorCategoria.tpl");
}
}
