<?php
session_start();
$_id = $_GET['id'];

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `banner` WHERE `banner`.`id` = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);

$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "Item deleted successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "Item not deleted";
}
