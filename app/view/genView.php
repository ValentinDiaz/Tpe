<?php

require_once './libs/smarty-master/libs/Smarty.class.php';


class genView {
  private $smarty;

  
  function __construct($isUser) {
    $this->smarty = new smarty();
    $this->smarty->assign('isUser',$isUser); // inicializo Smarty
 }

  function showDiscosByGen($discos){
        $this->smarty->assign('discos',$discos);
        $this->smarty->display('templetes/showDiscosByGe.tpl');
  }

  function showAllGeneros($generos,$genero){
        $this->smarty->assign('generos',$generos);
        $this->smarty->assign('genero',$genero);
        $this->smarty->display('templetes/generos.tpl');
  }

  function showErrorGenero($error,$url=null){
      $this->smarty->assign('error',$error);
      $this->smarty->assign('url',$url);
      $this->smarty->display('templetes/error.tpl');
  }

}