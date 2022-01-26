<?php
include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Banner;


$data = $_POST;

// validating data

function is_empty($value){
    if ($value == '') {
        return true;
    }else{
        return false;
    }
}

if (is_empty($data['title'])) {
    session_start();
    $_SESSION['message'] = "Title can't be empty!";
    header('location:edit.php?id='.$data['id']);
}else{
    $_banner = new Banner();

    $_banner->update($data);
}
