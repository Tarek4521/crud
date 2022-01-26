<?php

$_id = $_GET['id'];

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `categories` WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);

$result = $stmt->execute();

$categories = $stmt->fetch();

//echo "<pre>";
//print_r($categories);
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
                    <dd class="col-md-8"><?=$categories['name']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Link:</dt>
                    <dd class="col-md-8"><?=$categories['link']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">IS Draft:</dt>
                    <dd class="col-md-8"><?= $categories['is_draft']? 'Draft': 'Not draft';?></dd>
                </dl>
                </dl> <dl class="row">
                    <dt class="col-md-4">Created At:</dt>
                    <dd class="col-md-8"><?=$categories['created_at']?></dd>
                </dl> </dl>
                <dl class="row">
                    <dt class="col-md-4">Modified At:</dt>
                    <dd class="col-md-8"><?=$categories['modified_at']?></dd>
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
