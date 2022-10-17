<?php
class Modelo {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }

    public function ObtenerTodosLosInstumentos(){
        $query = $this->db->prepare('SELECT * FROM instrumento');
        $query->execute();
        $instrumentos = $query->FetchAll(PDO::FETCH_OBJ);
        return $instrumentos;

    }
    
    public function ObtenerInstrumentosPorId($id){
        $query = $this->db->prepare('SELECT instrumento,precio,descripcion,id_fk  FROM instrumento WHERE id = ?');
        $query->execute([$id]);
        return  $query->fetch(PDO::FETCH_OBJ);
        
    }
    public function ObtenerInstrumentosPorCategoria($id){
        $query = $this->db->prepare ('SELECT instrumento.instrumento, instrumento.precio, instrumento.descripcion FROM instrumento JOIN familia ON instrumento.id_fk = familia.id WHERE instrumento.id_fk= ?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    
    public function insertarInstrumento($instrumento, $precio, $descripcion ,$familia) {
        $query = $this->db->prepare('INSERT INTO instrumento (instrumento,precio,descripcion,id_fk) VALUES (?, ?, ?, ?)');
        $query->execute([$instrumento,$precio,$descripcion, $familia]);
        return $this->db->lastInsertId();
    }
    
    public function BorrarInstrumentosPorId($id) {
        $query = $this->db->prepare('DELETE FROM instrumento WHERE id = ?');
        $query->execute([$id]);
    }
    
    public function insertarInstrumentoMod($id,$instumentoModificado,$precioModificado,$descripcionModificado,$familiaEdit) {
        $query = $this->db->prepare('UPDATE instrumento SET  instrumento = ?,precio= ? ,descripcion = ?, id_fk = ? WHERE id= ?');
        $query->execute([$instumentoModificado,$precioModificado,$descripcionModificado,$familiaEdit,$id]);
    }
     
    }