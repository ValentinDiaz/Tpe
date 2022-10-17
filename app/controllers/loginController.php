<?php
include_once './app/view/loginView.php';
include_once './app/model/loginModel.php';


class loginController {

private $Model;
private $View;
private $loginHelper;
private $isUser;



     function __construct() {
        $this->loginHelper = new loginHelper();
        $this->isUser=$this->loginHelper->checkLoggedIn();
        $this->Model= new loginModel();
        $this->View = new loginView($this->isUser);

       


    
    }

    function showLogin(){
        $this->View->showLogin();



    }

    function verifyLogin(){
         $email = $_POST['email'];
         $password = $_POST['password'];



 
         
         $user = $this->Model->getUserByEmail($email);


 
        
         if ($user && password_verify($password, $user->password)) {
                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;
            
 
             
             header("Location: " . BASE_URL);
          } 
          else {
             
            $this->View->showLogin("El usuario o la contraseña no existe.");
        }
    }


    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }



}    