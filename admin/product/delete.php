<?php
$approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

include_once($approot."vendor/autoload.php");

use Bitm\Product;

$id = $_GET['id'];

$_product = new Product();

$_product->delete($id);