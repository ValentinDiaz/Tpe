h<?php

include_once './app/view/discoView.php';
include_once './app/model/generoModel.php';
require_once './app/helper/loginHelper.php';

class genController {

    private $genModel;
    private $loginHelper;
    private $isUser;
    private $genView;

    public function __construct() {
        $this->loginHelper = new loginHelper();
        $this->isUser=$this->loginHelper->checkLoggedIn();
        $this->genModel= new genModel();
        $this->genView = new genView($this->isUser);
 
    }
    
    function deleteGenero($id){
       try{ 
            if($this->isUser){
                $this->loginHelper->checkLoggedIn();
                $this->genModel->removeGenero($id);
                header("Location: " . BASE_URL ."generos" );
            }
            else{
                header("Location: " . BASE_URL ."generos" );

            }
        }catch(Exception){
            $this->genView->showErrorGenero("no se puede eliminar este genero","generos");

        }

        
        

    }
    function addGenero(){
        if($this->isUser){
            $generos= $_POST['genero'];

            if(empty($generos)){
                $this->genView->showErrorGenero("complete el formulario","generos");
                
                die();  

            }
            else{
                $id = $this->genModel->insertGenero($generos);
                header("Location: " . BASE_URL ."generos" );
            }
            
        }    
        else{
            header("Location: " . BASE_URL ."generos" );

        }

    }

    function editGenero(){
        if($this->isUser){
            $genero = $_POST['genero'];  
            $id = $_POST['id']; 
            
            if(!empty($genero)&&(!empty($id))){
                $this->genModel->updateGenero($genero,$id);
                header("Location: " . BASE_URL ."generos" );
                
            }else{
                 $this->genView->showErrorGenero("complete el formulario","generos") ;
            }
            
        }
        else{
            header("Location: " . BASE_URL ."generos" );

        }    

    }


   


    
        







}    


