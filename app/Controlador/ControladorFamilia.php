<?php
require_once 'app/Vista/VistaFamilia.php';
require_once 'app/Modelo/ModeloFamilia.php';
require_once 'app/Helper/helper.php';

class controladorFamilia {
    private $view;
    private $model;
    private $helper;
    public function __construct(){
       $this->model = new ModeloFamilia();
       $this->view = new VistaFamilia();
       $this->helper = new UsuarioHelper();
    }

    

    function MostrarFamilia (){
        $this->helper->PreguntarUsuario();
        $familia = $this->model->ObtenerTodasLasFamilias();
        $this->view->MostrarFamiliaVista($familia);
        
    }
    function AniadirFamilia(){
        $this->helper->PreguntarUsuario();
        $this->helper->ChekeoInicio();
        $familia = $_POST ["familia"];
        $informacion= $_POST ["informacion"];
        $this->model->AgregarFamilia($familia, $informacion);
        header("Location: " . BASE_URL. 'homeFamilia');
    
    }
    function EditarFamilia($id){
        $this->helper->PreguntarUsuario();
        $familia= $this->model->ObtenerFamiliaPorId($id);
        $this->view->MostrarFormularioEditarFamilia($familia,$id);
    }
    function ModificarFamiliaPorId($id){
        $this->helper->PreguntarUsuario();
        $familiaMod= $_POST["familiaMod"];
        $informacionMod = $_POST["informacionMod"];
        $this->model->InsertarFamiliaMod($familiaMod,$informacionMod,$id);
        header("Location: " . BASE_URL. 'homeFamilia');   
    }
    function BorrarFamilia($id){
        $this->helper->PreguntarUsuario();
        $this->model->BorrarFamiliaPorId($id);
        header("Location:" . BASE_URL. 'homeFamilia');
    }
}