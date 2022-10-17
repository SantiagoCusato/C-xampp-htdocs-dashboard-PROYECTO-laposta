<?php
require_once "app/Modelo/modelo.php";
require_once "app/Vista/vista.php";
require_once "app/Modelo/ModeloFamilia.php";
require_once "app/Modelo/ModelUsuario.php";
require_once "app/Helper/helper.php";
class Controlador {

    private $model;
    private $view;
    private $modelFamilia;
    private $helper;

	function __construct(){
        $this->model = new Modelo();
        $this->view = new Vista();
        $this->modelFamilia = new ModeloFamilia();
        $this->helper = new UsuarioHelper();
    }
  
    

    function MostrarInstrumentos (){
        $this->helper->PreguntarUsuario();
        $instrumentos = $this->model->ObtenerTodosLosInstumentos();
        $familia= $this->modelFamilia->ObtenerTodasLasFamilias();
        $this->view->MostrarInstumentosView($familia, $instrumentos);
    }     
    function MostrarUnInstrumento ($id){
        $this->helper->PreguntarUsuario();
        $familia= $this->modelFamilia->ObtenerTodasLasFamilias();
        $instrumento = $this->model->ObtenerInstrumentosPorId($id);
        $this->view->MostrarUnInstrumentoView($familia,$instrumento);
    }

    function AniadirInstrumento() {
        $this->helper->PreguntarUsuario();
        $instrumento= $_POST['1'];
        $precio= $_POST['2'];
        $descripcion = $_POST['3'];
        $familia= $_POST['4'];
        $this->model->insertarInstrumento($instrumento,$precio,$descripcion,$familia);

        header("Location: " . BASE_URL); 
    }
    function filtrarInstrumentoPorCategoria($id){
        $this->helper->PreguntarUsuario();
        $instrumentoCategoria = $this->model->ObtenerInstrumentosPorCategoria($id);
        $familia= $this->modelFamilia->ObtenerTodasLasFamilias();
        //$categorias =$this->modelFamilia->ObtenerTodasLasFamilias();
        $this->view->MostrarInstrumentoPorCategoriaView($familia, $instrumentoCategoria);

    }
    function EditarInstrumento($id) {
        $this->helper->PreguntarUsuario();
        $familia= $this->modelFamilia->ObtenerTodasLasFamilias();
        $instrumento = $this->model->ObtenerInstrumentosPorId($id);
        $this->view->MostrarFormularioEditar($familia,$instrumento,$id );
        //header("Location: " . BASE_URL);
    }
    function ModificarInstrumentoPorId($id){
        $this->helper->PreguntarUsuario();
        $instumentoModificado = $_POST['InstrumentoMod'];
        $precioModificado =$_POST['PrecioMod'];
        $descripcionModificado = $_POST['DescripcionMod'];
        $familiaEdit = $_POST ['familiaMod'];
        $this->model->insertarInstrumentoMod($id,$instumentoModificado,$precioModificado,$descripcionModificado,$familiaEdit);
        header("Location: " . BASE_URL); 

    }
      
    function BorrarInstrumento($id) {
        $this->helper->PreguntarUsuario();
        $this->model->BorrarInstrumentosPorId($id);
        header("Location: " . BASE_URL);
    }
}
    
