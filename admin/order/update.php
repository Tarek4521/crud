<?php
session_start();
$_id = $_POST['id'];
$_Product_id = $_POST['product_id'];
$_qty = $_POST['quantity'];

//echo "<pre>";
//print_r($_product_id);
//echo "</pre>";

//connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `orders` SET `Product_id` = :product_id, `qty` = :quantity WHERE `orders`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);
$stmt->bindParam(':product_id', $_Product_id);
$stmt->bindParam(':quantity', $_qty);
$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "The item has been updated successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "The item is not updated";
}