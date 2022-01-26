<?php

namespace Bitm;

use PDO;

class Banner {
    public function __construct()
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    public function index() {
    

        $query = "SELECT * FROM `banner`";

        $stmt = $this->conn-> prepare($query);

        $result = $stmt-> execute();

        $banners = $stmt-> fetchAll();

        return $banners;
    }
    public function getActiveBanners() {

        $_startFrom = 0;
        $_total = 3;

        $query = "SELECT * FROM `banner` WHERE is_active = 1 LIMIT $_startFrom,$_total";

        $stmt = $this->conn-> prepare($query);

        $result = $stmt-> execute();

        $banners = $stmt-> fetchAll();

        return $banners;
    }

    public function show($id) {
        $query = "SELECT * FROM `banner` WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();

        return $banner;
    }

    public function store($data){

       
        $_picture               = $this->upload();
        $_title                 = $data['title'];
        $_link                  = $data['link'];
        $_promotional_message   = $data['promotional_message'];
        $_html_banner           = $data['html_banner'];

       $_is_active = $this->active();
       $_is_draft = $this->draft();

        $_created_at = date('y-m-d h:i:s', time());

        //echo $_link;
        //echo $_title;


        //connect tot database

    

        $query = "INSERT INTO `banner` (`title`, `link`, `picture`, `promotional_message`, `html_banner`, `is_active`, `is_draft`, `created_at`) VALUES (:title, :link, :picture, :promotional_message, :html_banner, :is_active, :is_draft, :created_at)";



        $stmt = $this->conn->prepare($query);
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
        return $result;
            }

    public function delete($id){
        $query = "DELETE FROM `banner` WHERE `banner`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Item deleted successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "Item not deleted";
        }
            }

    public function edit($id){
        $query = "SELECT * FROM `banner` WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam('id', $id);

        $result = $stmt->execute();

        $banner = $stmt->fetch();

        return $banner;
    }

    public function update($data){

        $_picture = $this->upload();

        $_id = $data['id'];
        $_title = $data['title'];
        $_link = $data['link'];
        $_promotional_message = $data['promotional_message'];
        $_html_banner = $data['html_banner'];

       $_is_active = $this->active();

       $_is_draft = $this->draft();

        $_modified_at = date('y-m-d h:i:s', time());

        $query = "UPDATE `banner` SET `title` = :title, `link` = :link, `picture` = :picture, `promotional_message` = :promotional_message, `html_banner` = :html_banner, `is_active` = :is_active, `is_draft` = :is_draft, `modified_at` = :modified_at WHERE `banner`.`id` = :id;";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':link',$_link);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':promotional_message',$_promotional_message);
        $stmt->bindParam(':html_banner',$_html_banner);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_draft',$_is_draft);
        $stmt->bindParam(':modified_at',$_modified_at);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "The item has been updated successfully";
            header("location:index.php");

        }else{
            $_SESSION['message'] = "The item is not updated";
        }
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
        private function draft(){
        
        if (array_key_exists('is_draft', $_POST)){
            $_is_draft = $_POST['is_draft'];
        }else{
            $_is_draft = 0;
        }
            return $_is_draft;
        }
   
}