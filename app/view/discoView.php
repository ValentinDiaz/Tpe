<?php


require_once './libs/smarty-master/libs/Smarty.class.php';


class DiscoView {
    private $smarty;



    function __construct($isUser) {
        $this->smarty = new smarty();
        $this->smarty->assign('isUser', $isUser); // inicializo Smarty
    }

    function showAbout($discos,$generos) {
        $this->smarty->assign('discos', $discos);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templetes/home.tpl');
    }
    function showEdit($disco,$generos){
        $this->smarty->assign('disco', $disco);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templetes/editform.tpl');
    }

    function showMore($disco){
        $this->smarty->assign('disco', $disco);
        $this->smarty->display('templetes/showMore.tpl');
    }

    function ShowError($error,$url){
        $this->smarty->assign('error',$error);
        $this->smarty->assign('url',$url);
        $this->smarty->display('templetes/error.tpl');
    }

   
}