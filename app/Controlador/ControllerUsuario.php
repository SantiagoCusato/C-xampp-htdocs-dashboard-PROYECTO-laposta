<?php
require_once 'app/Vista/ViewUsuario.php';
require_once 'app/Modelo/ModelUsuario.php';
require_once 'app/Modelo/ModeloFamilia.php';
require_once 'app/Helper/helper.php';

class ControllerUsuario {
    private $view;
    private $model;
    private $modelFamilia;
    private $Helper;
    
    public function __construct() {
        $this->model = new ModeloUsuario();
        $this->view = new VistaUsuario();
        $this->modelFamilia = new ModeloFamilia();
        $this->helper = new UsuarioHelper();
    }
   
        

    public function MostrarLogin() {
        $familia= $this->modelFamilia->ObtenerTodasLasFamilias();
        $this->view->MostrarFormularioLogin($familia);
    }

    public function validarUsuario() {
        $email = $_POST['emailUsuario'];
        $password = $_POST['passwordUsuario'];
        $user = $this->model->ObtenerUsuarioPorEmail($email);
        if ($user && password_verify($password, $user->password)) {
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;
        

            header("Location: " . BASE_URL );
        } 
        else {
           $this->view->MostrarFormularioLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function Desconectar() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}