<?php

namespace Bitm;
use PDO;

class User{

    public $id = null;   
    public $username = null; 
    public $conn = null;    

    public function __construct()
    {
      

        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exceptiond
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index() {

        $query = "SELECT * FROM `users`";
        
        $stmt = $this->conn->prepare($query);
        
        $result = $stmt->execute();
        
        $users = $stmt->fetchAll();

        return $users;
    }

    public function store($data){
        

        $_username = $data['username'];
        $_password = $data['password'];
        $_fullname = $data['fullname'];
        $_email = $data['email'];
        $_phone_number = $data['phone_number'];
       

     

        $_created_at = date('y-m-d h:i:s', time());

        $query = "INSERT INTO `users` (`username`, `password`, `fullname`, `email`, `phone_number`, `created_at`) VALUES (:username, :password, :fullname, :email, :phone_number, :created_at);";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam('username', $_username);
        $stmt->bindParam('password', $_password);
        $stmt->bindParam('fullname', $_fullname);
        $stmt->bindParam('email', $_email);
        $stmt->bindParam('phone_number', $_phone_number);
        $stmt->bindParam('created_at', $_created_at);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Item stored successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "Item not stored";
        }
        return $result;
    }
    public function sign_up_form_store($data){
        

        $_username = $data['username'];
        $_password = $data['password'];
        $_fullname = $data['fullname'];
        $_email = $data['email'];
        $_phone_number = $data['phone_number'];
       

     

        $_created_at = date('y-m-d h:i:s', time());

        $query = "INSERT INTO `users` (`username`, `password`, `fullname`, `email`, `phone_number`, `created_at`) VALUES (:username, :password, :fullname, :email, :phone_number, :created_at);";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam('username', $_username);
        $stmt->bindParam('password', $_password);
        $stmt->bindParam('fullname', $_fullname);
        $stmt->bindParam('email', $_email);
        $stmt->bindParam('phone_number', $_phone_number);
        $stmt->bindParam('created_at', $_created_at);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Login successfully";
            header("location:http://localhost/crud/front/public/login.php");

        }else{
            $_SESSION['message'] = "Login fail";
        }
        return $result;
    }


    public function show(){

        $_id = $_GET['id'];
    
        $query = "SELECT * FROM `users` WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam('id', $_id);
        
        $result = $stmt->execute();
        
        $user = $stmt->fetch();

        return $user;
    }

    public function delete($id){

        

        $query = "DELETE FROM `users` WHERE `users`.`id` = :id";

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

        $query = "SELECT * FROM `users` WHERE `users`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        $user = $stmt->fetch();
        return $user;

    }
    
    public function login($username,$password){

        $query = "SELECT COUNT(*) AS total FROM `users` WHERE username LIKE :username AND password LIKE :password";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $result = $stmt->execute();
        $totalfound = $stmt->fetch();

        if($totalfound['total'] > 0){
            $_SESSION['is_authenticated'] = true;
            header("location:http://localhost/crud/admin/admin/dashboard.php");
        }else{
            $_SESSION['is_authenticated'] = false;
           header("location:http://localhost/crud/404.php");
        }       

    }

    public function update($data){

        $approot = $_SERVER['DOCUMENT_ROOT'].'/crud/';

        

        $_id = $data['id'];
        $_username = $data['username'];
        $_password = $data['password'];
        $_fullname = $data['fullname'];
        $_email = $data['email'];
        $_phone_number = $data['phone_number'];
       


        $_modified_at = date('y-m-d h:i:s', time());

        $query = "UPDATE `users` SET `username` = :username, `password` = :password, `fullname` = :fullname, `email` = :email, `phone_number` = :phone_number, `modified_at` = :modified_at WHERE `users`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $_id);
        $stmt->bindParam('username', $_username);
        $stmt->bindParam('password', $_password);
        $stmt->bindParam('fullname', $_fullname);
        $stmt->bindParam('email', $_email);
        $stmt->bindParam('phone_number', $_phone_number);
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

}
