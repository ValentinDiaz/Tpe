<?php


class genModel {
    private $db;

    function __construct (){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe2;charset=utf8', 'root', '');
         
    
    }

   
    function getAllGeneros(){
        $query =$this-> db->prepare( 'SELECT * FROM generos');
        $query->execute();
        $discos = $query->fetchAll(PDO::FETCH_OBJ);
    
        
        return $discos;
    }

    function removeGenero($id){
        $query = $this->db->prepare('DELETE FROM generos WHERE id_genero = ?');
        $query->execute([$id]);

    }

    function insertGenero($generos){
        $query = $this->db->prepare("INSERT INTO generos (genero) VALUES(?)");
        $query->execute([$generos]);
    }    

    function getGeneroById($id){
        $query =$this->db->prepare( 'SELECT * FROM generos WHERE id_genero=?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);   
    }    


    function updateGenero($genero, $id){
        $query = $this->db->prepare('UPDATE generos SET genero=? WHERE id_genero=?');
         $query->execute([$genero, $id]);
    }













}