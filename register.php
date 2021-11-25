<?php 
include('function.php');
if(!empty($_POST)){
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $retypePassword = $_POST['retypePassword'];
    /* Valication for Full Name */
    if(empty($fullname)){
        errorMessage('index.php', 'Fullname can not be empty');
    }
    if(strlen($fullname)<3){
        errorMessage('index.php', 'Fullname can not be lessthen 3.');
    }
}
?>