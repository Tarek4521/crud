<?php
$approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

include_once($approot."vendor/autoload.php");

use Bitm\User;

$id = $_GET['id'];

$_user = new User();

$_user->delete($id);