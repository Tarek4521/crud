<?php 

// $approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';
// include_once($approot."vendor/autoload.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/crud/config.php");

use Bitm\Product;



$data = $_POST;

//Using for validating title//

function is_empty($value){

    if($value == ''){
    
    return true;
    
    }else{
    
    return false;
    
    }
    
    }
    
    
    if(is_empty($data['title'])){
    
    session_start();
    
    $_SESSION['message'] = "Title can't be empty";
    
    header('location:edit.php?id='.$data['id']);
   
    
    }else{
    
        $_product = new Product();

        $_product->update($data);
    
    }
    






?>