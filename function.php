<?php 
session_start();
function getError()
{
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
        session_unset();
        return $error;
    }else{
        return false;
    }
}
/* Create session error message */
function errorMessage($url, $message)
{
    $_SESSION['error'] = $message;
    redirect($url);
}
/* Redirect to a page */
function redirect($url){
    header('Location:'.$url);
    exit();
}

?>