<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");
        
  use Bitm\User;
  
    $username = $_POST['username'];
    $password = $_POST['password'];
   
   

 
    function is_empty($value){
        if ($value == '') {
            return true;
        }else{
            return false;
        }
    }
   
    if(empty($username) || empty($password)){
        session_start();
        $_SESSION['message'] = "Username can't be empty";
        header('location: '.$webroot.'front/public/signup.php');
    }
    else{
        $_user = new user();
        $_user->login($username, $password);
    }
    ?>