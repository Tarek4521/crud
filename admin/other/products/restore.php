<?php 

// $approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';
// include_once($approot."vendor/autoload.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/crud/config.php");

use Bitm\Product;


$_product = new Product();

$_product->restore()




?>