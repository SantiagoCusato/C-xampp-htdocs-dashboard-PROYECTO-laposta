<?php
require_once "app/Controlador/Controller.php";
require_once "app/Controlador/ControllerUsuario.php";
require_once "app/Controlador/ControladorFamilia.php";
require_once "app/Helper/helper.php";
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo
switch ($params[0]) {
    case 'login':
       $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->MostrarLogin();
        break;
    case 'validate':
        $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->validarUsuario();
        break;

    case 'logout':
        $ControllerUsuario = new ControllerUsuario();
        $ControllerUsuario->Desconectar();
        break;
    case 'home':
        $TPController = new Controlador();
        $TPController->MostrarInstrumentos();
        break;
    case 'homeFamilia':
        $ControladorFamilia= new controladorFamilia();
        $ControladorFamilia->MostrarFamilia();
        break;
    case 'filtro':
        $TPController= new controlador();
        $id = $params[1];
        $TPController->FiltrarInstrumentoPorCategoria($id);
        break;
    case 'instrumento':
        $TPController =new Controlador();
        $id = $params[1];
        $TPController->MostrarUnInstrumento ($id);
        break;
    case 'add':
        $TPController = new Controlador();
        $TPController->AniadirInstrumento();
        break;
    case 'addfamilia':
        $ControladorFamilia= new controladorFamilia();
        $ControladorFamilia->AniadirFamilia();
        break;
    case 'edit':
        $TPController = new Controlador();
        $id = $params[1];
        $TPController->EditarInstrumento($id);
        break;
    case 'editFamilia':
        $ControladorFamilia=new controladorFamilia();
        $id =$params[1];
        $ControladorFamilia->EditarFamilia($id); 
        break;
    case 'update':
        $TPController = new Controlador();
        $id = $params[1];
        $TPController->ModificarInstrumentoPorId($id);
        break;
    case 'updatefamilia';
        $ControladorFamilia = new controladorFamilia();
        $id =$params[1];
        $ControladorFamilia->ModificarFamiliaPorId($id);
        break;
    case 'delete':
        $TPController = new Controlador();
        $id = $params[1];
        $TPController->BorrarInstrumento($id);
        break;
    case 'deleteFamilia':
        $ControladorFamilia= new controladorFamilia();
        $id = $params[1];
        $ControladorFamilia->BorrarFamilia($id);
        break;
    default:
        echo "404 not found";
        
        break;
}
