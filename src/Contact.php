<?php

namespace Bitm;
use PDO;

class Contact{
    public function index() {
        session_start();
        $conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM `contacts`";

        $stmt = $conn->prepare($query);

        $result = $stmt->execute();

        $contacts = $stmt->fetchAll();
        return $contacts;
    }
}