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
    header('location:edit.php?id='.$data['id']);
}else{
    $_user = new User();

    $_user->update($data);
}


