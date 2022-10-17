<?php

require_once './libs/smarty-master/libs/Smarty.class.php';


class loginView {
  private $smarty;

  
  function __construct($isUser) {
    $this->smarty = new smarty();
    $this->smarty->assign('isUser',$isUser); // inicializo Smarty
   }

 function showLogin($error=null){
    $this->smarty->assign('error', $error);
    $this->smarty->display('templetes/login.tpl');
   }


   




}     