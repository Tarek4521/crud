<?php
session_start();
$_id = $_POST['id'];
$_name = $_POST['name'];
$_email = $_POST['email'];
$_subject = $_POST['subject'];
$_comment = $_POST['comment'];

if (array_key_exists('is_active', $_POST)){
    $_is_active = $_POST['is_active'];
}else{
    $_is_active = 0;
}
$_modified_at = date('y-m-d h:i:s', time());


$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `contacts` SET `name` = :name, `email` = :email, `subject` = :subject, `comment` = :comment, `is_active` = :is_active, `modified_at` = :modified_at WHERE `contacts`.`id` = :id;";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);
$stmt->bindParam('name', $_name);
$stmt->bindParam('email', $_email);
$stmt->bindParam('subject', $_subject);
$stmt->bindParam('comment', $_comment);
$stmt->bindParam('is_active', $_is_active);
$stmt->bindParam('modified_at', $_modified_at);

$result = $stmt->execute();

if ($result){
    $_SESSION['message'] = "The item has been updated successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "The item is not updated";
}