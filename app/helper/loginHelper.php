<?php



class loginHelper {

public function checkLoggedIn() {
    if(session_status() != PHP_SESSION_ACTIVE){
    session_start();

    }
    return isset($_SESSION['IS_LOGGED']);
} 
}