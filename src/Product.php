<?php

namespace Bitm;
use PDO;

class Product{

    public $id = null;   
    public $title = null; 
    public $conn = null;    

    public function __construct()
    {
      

        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exceptiond
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index() {

        $query = "SELECT * FROM `product`";
        
        $stmt = $this->conn->prepare($query);
        
        $result = $stmt->execute();
        
        $products = $stmt->fetchAll();

        return $products;
    }

    public function show(){

        $_id = $_GET['id'];
    
        $query = "SELECT * FROM `product` WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam('id', $_id);
        
        $result = $stmt->execute();
        
        $product = $stmt->fetch();

        return $product;
    }

    public function store($data){
        
        $_picture = $this->upload();

        $_title = $data['title'];
        $_price = $data['price'];

       $_is_active = $this->active();

        $_created_at = date('y-m-d h:i:s', time());

        $query = "INSERT INTO `product` (`title`, `picture`, `is_active`, `created_at`, `price`) VALUES (:title, :picture, :is_active, :created_at, :price);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('title', $_title);
        $stmt->bindParam('price', $_price);
        $stmt->bindParam('picture', $_picture);
        $stmt->bindParam('is_active', $_is_active);
        $stmt->bindParam('created_at', $_created_at);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Item updated successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "Item not updated";
        }
        return $result;
    }
    
    public function delete($id){

        

        $query = "DELETE FROM `product` WHERE `product`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "The item has been deleted successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "The item is not deleted";
        }

    }

    public function edit($id){

        $query = "SELECT * FROM `product` WHERE `product`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        $product = $stmt->fetch();
        return $product;

    }
    
    public function update($data){

        $approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';

        $_picture = $this->upload();

        $_id = $data['id'];
        $_title = $data['title'];
        $_price = $data['price'];

        $_is_active = $this->active();


        $_modified_at = date('y-m-d h:i:s', time());

        $query = "UPDATE `product` SET `title` = :title, `price` = :price, `picture` = :picture, `modified_at` = :modified_at, `is_active` = :is_active WHERE `product`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);
        $stmt->bindParam('title', $_title);
        $stmt->bindParam('price', $_price);
        $stmt->bindParam('is_active', $_is_active);
        $stmt->bindParam('picture', $_picture);
        $stmt->bindParam('modified_at', $_modified_at);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Item updated successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "Item not updated";
        }
        return $result;
    }

    private function upload(){

        $approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';
        $_picture = null;

        if ($_FILES['picture']['name'] != ""){
            $filename = 'IMG_'.time().'_'.$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'uploads/'.$filename;

            $isFileMoved = move_uploaded_file($target,$destination);
            if ($isFileMoved) {
                $_picture = $filename;
            }
        }
        else{
        if($_POST['old_picture']){
            $_picture = $_POST['old_picture'];
        }
        }
        return $_picture;


    }

    private function active(){
        if (array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }
        return $_is_active;
    }

    public function getactiveProduct() {

        $_startFrom = 0;
        $_total = 4;

        $query = "SELECT * FROM `product` WHERE is_active = 1 LIMIT $_startFrom,$_total";
        
        $stmt = $this->conn->prepare($query);
        
        $result = $stmt->execute();
        
        $products = $stmt->fetchAll();

        return $products;
    }

    
}