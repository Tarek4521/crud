<?php

namespace Bitm;

use PDO;

class Cart
{

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exceptiond
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function index()
    {


        $query = "SELECT * FROM `carts`";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();

        $carts = $stmt->fetchAll();
        return $carts;
    }

    public function show()
    {
        $_id = $_GET['id'];


        $query = "SELECT * FROM `carts` WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);

        $result = $stmt->execute();

        $cart = $stmt->fetch();

        return $cart;
    }

    public function mycart()
    {
        $query = "SELECT * FROM carts WHERE user_id = '" . $_SESSION['user'] . "'";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $carts = $stmt-> fetchAll();
    }

    public function store()
    {

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/crud/';
        $filename = 'IMG_' . time() . '_' . $_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot . 'uploads/' . $filename;

        $isFileMoved = move_uploaded_file($target, $destination);
        if ($isFileMoved) {
            $_picture = $filename;
        }

        $_user_id           = $_POST['user_id'];
        $_product_id    = $_POST['product_id'];
        $_product_title = $_POST['product_title'];
        $_qty           = $_POST['qty'];
        $_unite_price   = $_POST['unite_price'];
        $_total_price   = $_POST['total_price'];





        $query = "INSERT INTO `carts` (`user_id`, `product_id`, `picture`, `product_title`, `qty`, `unite_price`, `total_price`) VALUES (:user_id, :product_id, :picture, :product_title, :qty, :unite_price, :total_price);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('user_id', $_user_id);
        $stmt->bindParam('product_id', $_product_id);
        $stmt->bindParam('picture', $_picture);
        $stmt->bindParam('product_title', $_product_title);
        $stmt->bindParam('qty', $_qty);
        $stmt->bindParam('unite_price', $_unite_price);
        $stmt->bindParam('total_price', $_total_price);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "Item added successfully";
            header("location:index.php");
        } else {
            $_SESSION['message'] = "Item not stored";
        }
        return $result;
    }

    public function addto_cart()
    {

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/crud/';
        $filename = 'IMG_' . time() . '_' . $_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot . 'uploads/' . $filename;

        $isFileMoved = move_uploaded_file($target, $destination);
        if ($isFileMoved) {
            $_picture = $filename;
        }


        $_user_id         = $_POST['user_id'];
        $_product_id    = $_POST['product_id'];
        $_product_title = $_POST['product_title'];
        $_qty           = $_POST['qty'];
        $_unite_price   = $_POST['unite_price'];
        $_total_price   = $_POST['total_price'];

        $query = "INSERT INTO `carts` (`user_id`, `product_id`, `picture`, `product_title`, `qty`, `unite_price`, `total_price`) VALUES (:user_id, :product_id, :picture, :product_title, :qty, :unite_price, :total_price);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('user_id', $_user_id);
        $stmt->bindParam('product_id', $_product_id);
        $stmt->bindParam('picture', $_picture);
        $stmt->bindParam('product_title', $_product_title);
        $stmt->bindParam('qty', $_qty);
        $stmt->bindParam('unite_price', $_unite_price);
        $stmt->bindParam('total_price', $_total_price);


        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "Item added into cart successfully";
            header("location:index.php");
        } else {
            $_SESSION['message'] = "Item added fail";
        }
        return $result;
    }

    public function edit()
    {
        $_id = $_GET['id'];



        $query = "SELECT * FROM `carts` WHERE `carts`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);

        $result = $stmt->execute();

        $cart = $stmt->fetch();

        return $cart;
    }

    public function update()
    {
        session_start();

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/crud/';

        //working with image

        if ($_FILES['picture']['name'] != "") {
            $filename = 'IMG_' . time() . '_' . $_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot . 'uploads/' . $filename;

            $isFileMoved = move_uploaded_file($target, $destination);
            if ($isFileMoved) {
                $_picture = $filename;
            } else {
                $_picture = null;
            }
        } else {
            $_picture = $_POST['old_picture'];
        }


        $_id = $_POST['id'];
        $_user_id = $_POST['user_id'];
        $_product_id = $_POST['product_id'];
        $_product_title = $_POST['product_title'];
        $_qty = $_POST['qty'];
        $_unite_price = $_POST['unite_price'];
        $_total_price = $_POST['total_price'];





        $query = "UPDATE `carts` SET `user_id` = :user_id, `product_id` = :product_id, `picture` = :picture, `product_title` = :product_title, `qty` = :qty, `unite_price` = :unite_price, `total_price` = :total_price WHERE `carts`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);
        $stmt->bindParam('user_id', $_user_id);
        $stmt->bindParam('product_id', $_product_id);
        $stmt->bindParam('picture', $_picture);
        $stmt->bindParam('product_title', $_product_title);
        $stmt->bindParam('qty', $_qty);
        $stmt->bindParam('unite_price', $_unite_price);
        $stmt->bindParam('total_price', $_total_price);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "Item updated successfully";
            header("location:index.php");
        } else {
            $_SESSION['message'] = "Item not updated";
        }
        return $result;
    }

    public function delete()
    {

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/crud/';
        $_id = $_GET['id'];



        $query = "DELETE FROM `carts` WHERE `carts`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "The item has been deleted successfully";
            header("location:index.php");
        } else {
            $_SESSION['message'] = "The item is not deleted";
        }
    }

    public function cart_delete()
    {

        $approot = $_SERVER['DOCUMENT_ROOT'] . '/crud/';
        $_id = $_GET['id'];



        $query = "DELETE FROM `carts` WHERE `carts`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['message'] = "The item has been deleted successfully";
            header("location:index.php");
        } else {
            $_SESSION['message'] = "The item is not deleted";
        }
    }
}
