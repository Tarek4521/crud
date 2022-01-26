<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\User;

$data = $_POST;

// validating data

function is_empty($value){
    if ($value == '') {
        return true;
    }else{
        return false;
    }
}

if (is_empty($data['username'])) {
    session_start();
    $_SESSION['message'] = "Username can't be empty!";
    header("location:".$webroot."front/public/login.php");
}else{
    $_user = new User();

    $_user->sign_up_form_store($data);
}

