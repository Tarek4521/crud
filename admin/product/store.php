<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Product;

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
    header('location:create.php');
}else{
    $_product = new Product();

    $_product->store($data);
}
