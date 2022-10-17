<?php
include_once './app/view/discoView.php';
include_once './app/model/discoModel.php';
require_once './app/helper/loginHelper.php';

class abmController {

    private $model;
    private $view;
    private $genModel;
    private $loginHelper;
    private $isUser;
    


    public function __construct() {
        $this->loginHelper = new loginHelper();
        $this->isUser = $this->loginHelper->checkLoggedIn();
        $this->model = new discoModel();
        $this->view = new discoView($this->isUser);
        $this->genModel= new genModel();
        
        


        
    }


        
    

    function addDisco () {
        if($this->isUser){
                 $titulo = $_POST['titulo'];
                 $anio = $_POST['año'];
                 $artista = $_POST['artista'];
                 $generos= $_POST['generos']; 

                  if (empty($titulo)||empty($anio)||empty($artista)||empty($generos)){
                    $this->view->showError("complete todos los campos","home");
                  
                  die();  
                 }
             
                     $id = $this->model->insertDisco($titulo, $anio, $artista, $generos);
             
             
             
                    header("Location: " .BASE_URL); 
        } 
        else{
            header("Location: " .BASE_URL);
        }           
        


    }

    function deleteDisco($id) {
        if($this->isUser){
            $this->model->removeDisco($id);
            header("Location: " . BASE_URL);
        }
        else{
            header("Location: " . BASE_URL);

        }    
    }

    function showUpdate($id){
        if($this->isUser){
             $disco = $this->model->getDiscoById($id);
             $genero=$this->genModel->getAllGeneros();
             $this->view->showEdit($disco,$genero);
        }
        else{
            header("Location: " . BASE_URL);

        }


    }

    function addEdit(){
        if($this->isUser){
            $titulo = $_POST['titulo'];
            $anio = $_POST['año'];
            $artista = $_POST['artista'];
            $genero= $_POST['generos']; 
            $id = $_POST['id']; 

            if (empty($titulo)||empty($anio)||empty($artista)||empty($genero)){
                $this->view->showError("complete todos los campos","home");
                
                die();  
            }    

             $this->model->editById($titulo, $anio, $artista, $genero, $id);
 
            header("Location: " .BASE_URL); 
        }
        else{
            header("Location: " .BASE_URL);

        }


    }

}