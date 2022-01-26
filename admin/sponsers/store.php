<?php
session_start();

$approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';
//working with image

$filename = 'IMG_'.time().'_'.$_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $approot.'uploads/'.$filename;

$isFileMoved = move_uploaded_file($target,$destination);
if ($isFileMoved) {
    $_picture = $filename;
}
$_title = $_POST['title'];
$_link = $_POST['link'];
$_promotional_message = $_POST['promotional_message'];
$_html_banner = $_POST['html_banner'];

if (array_key_exists('is_active', $_POST)){
    $_is_active = $_POST['is_active'];
}else{
    $_is_active = 0;
}
if (array_key_exists('is_draft', $_POST)){
    $_is_draft = $_POST['is_draft'];
}else{
    $_is_draft = 0;
}

$_created_at = date('y-m-d h:i:s', time());

//echo $_link;
//echo $_title;


//connect tot database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `sponsers` (`title`, `picture`, `link`, `promotional_massege`, `html_banner`, `is_active`, `is_draft` `created_at`) VALUES (:title, :picture, :link, :promotional_massege`, :html_banner, :is_active, :is_draft, :created_at);";




echo "$query";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':link',$_link);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':promotional_message',$_promotional_message);
$stmt->bindParam(':html_banner',$_html_banner);
$stmt->bindParam(':is_active',$_is_active);
$stmt->bindParam(':is_draft',$_is_draft);
$stmt->bindParam(':created_at',$_created_at);


$result = $stmt->execute();
//$result1 = $stmt1->execute();
if ($result){
    $_SESSION['message'] = "Item stored successfully";
    header("location:index.php");

}else{
    $_SESSION['message'] = "Item not stored";
}