<?php
session_start();
$_id = $_POST['id'];
$_name = $_POST['name'];
$_email = $_POST['email'];
$_password = $_POST['password'];
$_phone = $_POST['phone'];

if (array_key_exists('is_draft', $_POST)){
    $_is_draft = $_POST['is_draft'];
}else{
    $_is_draft = 0;
}

$_modified_at = date('y-m-d h:i:s', time());

//connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `admin` SET `name` = :name, `email` = :email, `password` = :password, `phone` = :phone, `is_draft` = :is_draft, `modified_at` = :modified_at WHERE `admin`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);
$stmt->bindParam('name', $_name);
$stmt->bindParam('email', $_email);
$stmt->bindParam('password', $_password);
$stmt->bindParam('phone', $_phone);
$stmt->bindParam(':is_draft',$_is_draft);
$stmt->bindParam(':modified_at',$_modified_at);


$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "The item has been updated successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "The item is not updated";
}