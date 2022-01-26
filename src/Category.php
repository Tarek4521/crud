<?php

namespace Bitm;

use PDO;

class Category {
    public function index() {
        session_start();
        $conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM `categories`";

        $stmt = $conn->prepare($query);

        $result = $stmt->execute();

        $categories = $stmt->fetchAll();
        return $categories;
    }
}