<?php
include_once './app/controllers/discoController.php';
include_once './app/controllers/abmController.php';
include_once './app/controllers/genController.php';
include_once './app/controllers/loginController.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action= $_GET['action'];
}
else{
    $action = 'home';
};
;



$params = explode('/', $action); // genera un arreglo
    
switch ($params[0]) {
    case 'login':
        $loginController = new loginController();
        $loginController->showLogin();
        break;
    case 'verify':
        $loginController = new loginController();
        $loginController->verifyLogin();
        break;
    case 'logout':
        $loginController = new loginController();
        $loginController->logout();
        break;    
    case 'home':
        $discoController = new discoController();
        $discoController->showAbout();
        break;
    case 'add' :
         $abmController = new abmController();
         $abmController->addDisco();
        break;
    case 'delete' :
        $id=($params[1]);
        $abmController = new abmController();
        $abmController->deleteDisco($id);
        break;
    case 'showEdit' :
        $id=($params[1]);
        $abmController = new abmController();
        $abmController->showUpdate($id);
        break;
    case 'addEdit' :
        $abmController = new abmController();
        $abmController->addEdit();
        break;
    case 'showMore' :
        $id=($params[1]);
        $discoController = new discoController();
        $discoController->showDiscosByGenero($id);
        break;    
    case 'showByGeneros':
        $gen=($params[1]);
        $discoController = new discoController();
        $discoController->showByGeneros($gen);
        break;    
    case 'generos':
        $discoController = new discoController();
        $discoController->showGeneros();
        break; 
    case 'deleteGenero' :
        $id=($params[1]);
        $GenController = new GenController();
        $GenController->deleteGenero($id);
        break;     
    case 'addGenero' :
        $GenController = new GenController();
        $GenController->addGenero();
    break;     
    case 'ShowEditGenero':
        $id=($params[1]);
        $discoController = new discoController();
        $discoController->ShowEditGenero($id);
    break;
    case 'editGenero' :
        
        $GenController = new GenController();
        $GenController->EditGenero();
    break;           
    default:
        echo "404 not found";
        break;
}