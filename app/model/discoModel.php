<?php

class discoModel {

    private $db;

    public function __construct (){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe2;charset=utf8', 'root', '');
    }





    function getDiscos () {
        
        $query =$this-> db->prepare( 'SELECT * FROM disco');
        $query->execute();
        $discos = $query->fetchAll(PDO::FETCH_OBJ);
    
        
        return $discos;
    }   


 function insertDisco ($titulo, $anio, $artista, $id_genero){

        $query = $this->db->prepare("INSERT INTO disco (titulo, anio, artista, id_genero) VALUES(?, ?, ?, ?)");
        $query->execute([$titulo, $anio, $artista, $id_genero]);

        return $this->db->lastInsertId();
    
    }

    function removeDisco($id) {
        $query = $this->db->prepare('DELETE FROM disco WHERE id = ?');
        $query->execute([$id]);

    }
     
        
    function getDiscoById ($id){
        $query =$this-> db->prepare( 'SELECT * FROM disco a INNER JOIN generos b 
        ON a.id_genero = b.id_genero WHERE a.id=?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    } 

         
      
    function editById($titulo, $anio, $artista, $id_genero, $id){
        $query = $this->db->prepare("UPDATE disco SET titulo = ?, anio = ?, artista = ?, id_genero = ? WHERE id= ?");
         $query->execute([$titulo, $anio, $artista,  $id_genero ,$id]);
    }



    function getGeneros(){
        
        $query =$this-> db->prepare( 'SELECT * FROM disco a INNER JOIN generos b 
        ON a.id_genero = b.id_genero');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }   
  

    function getDiscoByGen($gen){
        $query = $this->db->prepare('SELECT * FROM disco d INNER JOIN generos g
        ON d.id_genero = g.id_genero WHERE d.id_genero=?'); 
        $query->execute([$gen]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 
     
}

