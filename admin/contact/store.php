<?php
session_start();
$_name = $_POST['name'];
$_email = $_POST['email'];
$_subject = $_POST['subject'];
$_comment = $_POST['comment'];

if (array_key_exists('is_active', $_POST)){
    $_is_active = $_POST['is_active'];
}else{
    $_is_active = 0;
}

$_created_at = date('y-m-d h:i:s', time());
//echo "<pre>";
//print_r($_title);
//echo "</pre>";
//connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `contacts` (`name`, `email`, `subject`, `comment`, `is_active`, `created_at`) VALUES (:name, :email, :subject, :comment, :is_active, :created_at);";

$stmt = $conn->prepare($query);

$stmt->bindParam('name', $_name);
$stmt->bindParam('email', $_email);
$stmt->bindParam('subject', $_subject);
$stmt->bindParam('comment', $_comment);
$stmt->bindParam('is_active', $_is_active);
$stmt->bindParam('created_at', $_created_at);

$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "Item added successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "Item not stored";
}