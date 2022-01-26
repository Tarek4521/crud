<?php
$webroot = "http://localhost/crud/";
$_id = $_GET['id'];

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `banner` WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam('id', $_id);

$result = $stmt->execute();

$banner = $stmt->fetch();

//echo "<pre>";
//print_r($product);
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
                    <dt class="col-md-4">ID:</dt>
                    <dd class="col-md-8"><?=$banner['id']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Title:</dt>
                    <dd class="col-md-8"><?=$banner['title']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">link:</dt>
                    <dd class="col-md-8"><?=$banner['link']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Promotional Message:</dt>
                    <dd class="col-md-8"><?=$banner['promotional_message']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">HTML Banner:</dt>
                    <dd class="col-md-8"><?=$banner['html_banner']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">IS Active:</dt>
                    <dd class="col-md-8"><?= $banner['is_active']? 'Activated': 'Deactivated';?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">IS Draft:</dt>
                    <dd class="col-md-8"><?= $banner['is_draft']? 'Draft': 'Not draft';?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">HTML Banner:</dt>
                    <dd class="col-md-8"><?=$banner['created_at']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">HTML Banner:</dt>
                    <dd class="col-md-8"><?=$banner['modified_at']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Picture:</dt>
                    <dd class="col-md-8"><img src="<?=$webroot;?>uploads/<?=$banner['picture']?>"></dd>
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
