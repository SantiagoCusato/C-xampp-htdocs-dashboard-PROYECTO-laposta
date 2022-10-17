<?php
class ModeloFamilia{
    private $db;
    public function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }

    public function ObtenerTodasLasFamilias(){
        $query = $this->db->prepare('SELECT *FROM familia');
        $query->execute();
        $Familias = $query->FetchAll(PDO::FETCH_OBJ);
        return $Familias;
    }
    public function ObtenerFamiliaPorId($id){
        $query = $this->db->prepare('SELECT * FROM familia WHERE id = ?');
        $query->execute([$id]);
        return  $query->fetch(PDO::FETCH_OBJ);
    }
    public function AgregarFamilia($familia, $informacion){
        $query = $this->db->prepare('INSERT INTO familia (familia,informacion) VALUES (?,?)');
        $query->execute([$familia,$informacion]);
        
    }
    public function BorrarFamiliaPorId($id){
        $query= $this->db->prepare('DELETE FROM familia WHERE id = ?');
        $query->execute([$id]);
    }
    public function InsertarFamiliaMod($familiaMod,$informacionMod,$id){
        $query = $this->db->prepare('UPDATE familia SET familia = ?, informacion = ? WHERE id= ?');
        $query->execute([$familiaMod,$informacionMod,$id]);

    }

}