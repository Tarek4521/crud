<?php
session_start();
$_name = $_POST['name'];
$_email = $_POST['email'];
$_password = $_POST['password'];
$_phone = $_POST['phone'];


if (array_key_exists('is_draft', $_POST)){
    $_is_draft = $_POST['is_draft'];
}else{
    $_is_draft = 0;
}

$_created_at = date('y-m-d h:i:s', time());


//echo "<pre>";
//print_r($_title);
//echo "</pre>";
//connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `admin` (`name`, `email`, `password`, `phone`, `is_draft`, `created_at`) VALUES (:name, :email, :password, :phone, :is_draft, :created_at);";

$stmt = $conn->prepare($query);
$stmt->bindParam('name', $_name);
$stmt->bindParam('email', $_email);
$stmt->bindParam('password', $_password);
$stmt->bindParam('phone', $_phone);
$stmt->bindParam('is_draft', $_is_draft);
$stmt->bindParam('created_at', $_created_at);

$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "Item added successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "Item not stored";
}