<?php 
include_once './app/view/discoView.php';
include_once './app/model/discoModel.php';
include_once './app/model/generoModel.php';
include_once './app/view/genView.php';
require_once './app/helper/loginHelper.php';




class discoController {
    private $model;
    private $view;
    private $genModel;
    private $genView;
    private $loginHelper;
    private $isUser;
    
    


    public function __construct() {
        $this->loginHelper = new loginHelper();
        $this->isUser = $this->loginHelper->checkLoggedIn();
        $this->model = new discoModel ();
        $this->view = new discoView($this->isUser);
        $this->genModel= new genModel();
        $this->genView = new genView($this->isUser);
        
        
    }




    function showAbout () {
     
       $discos= $this->model->getGeneros();
       $generos=$this->genModel->getAllGeneros();
       $this->view->showAbout($discos,$generos);

    }

   

    
    


    function showDiscos($id){
         $disco = $this->model->getDiscoById($id);
        
    }
    function showDiscosByGenero($id){
        $disco = $this->model->getDiscoById($id);
        $this->view->showMore($disco);  

    }   
    function showByGeneros($gen){
        $discos = $this->model->getDiscoByGen($gen);
        $this->genView->showDiscosByGen($discos);
    }

    function showGeneros($genero=null){
        $generos = $this->genModel->getAllGeneros();
        $this->genView->showAllGeneros($generos, $genero);
    }
    function ShowEditGenero($id){
        $genero = $this->genModel->getGeneroById($id);
        $this->showGeneros($genero);
        
    }


   


    

 
    
    


        
  

        

  



    



    
    






    

}