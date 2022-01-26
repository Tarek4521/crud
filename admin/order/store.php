<?php
$_product_id= $_POST['product_id'];
$_quantity= $_POST['quantity'];
//echo "<pre>";
//print_r($_title);
//echo "</pre>";
//connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `orders` (`Product_id`, `qty`) VALUES (:product_id, :quantity);";

$stmt = $conn->prepare($query);
$stmt->bindParam('product_id', $_product_id);
$stmt->bindParam('quantity', $_quantity);
$result = $stmt->execute();

if ($result){
    header("location:index.php");
}
