<?php

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
}