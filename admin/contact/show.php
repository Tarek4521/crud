<?php

$_id = $_GET['id'];

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `contacts` WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);

$result = $stmt->execute();

$contact = $stmt->fetch();

//echo "<pre>";
//print_r($contact);
//echo "</pre>";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="text-center">Show</h1>

                <dl class="row">
                    <dt class="col-md-4">Name:</dt>
                    <dd class="col-md-8"><?=$contact['name']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Email:</dt>
                    <dd class="col-md-8"><?=$contact['email']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Subject:</dt>
                    <dd class="col-md-8"><?=$contact['subject']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Comment:</dt>
                    <dd class="col-md-8"><?=$contact['comment']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">IS Active:</dt>
                    <dd class="col-md-8"><?= $contact['is_active']? 'Activated': 'Deactivated';?></dd>
                </dl>
                </dl> <dl class="row">
                    <dt class="col-md-4">Created At:</dt>
                    <dd class="col-md-8"><?=$contact['created_at']?></dd>
                </dl> </dl>
                <dl class="row">
                    <dt class="col-md-4">Modified At:</dt>
                    <dd class="col-md-8"><?=$contact['modified_at']?></dd>
                </dl>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
