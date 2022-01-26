<?php
session_start();
$_id = $_GET['id'];

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `categories` WHERE `categories`.`id` = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);

$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "The item has been deleted successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "The item is not deleted";
}


