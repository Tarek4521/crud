<?php
// $approot=$_SERVER['DOCUMENT_ROOT']. "/crud/";
// include_once($approot."vendor/autoload.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/crud/config.php");

use Bitm\Product;


$_id = $_GET['id'];

$_product = new Product();

$product = $_product->show($_id)

  


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show</title>
</head>

<body>
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h1 class="text-center mb-4">Show</h1>
                    <dl class="row">
                        <dt class="col-md-4">id</dt>
                        <dd class="col-md-8"><?= $product['id']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-4">Title</dt>
                        <dd class="col-md-8"><?= $product['title']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-4">Is Active</dt>
                        <dd class="col-md-8">
                            <?php
                            //    if($product['isactive']==1){
                            //        echo "This is a active product";
                            //    }else{
                            //        echo "This is an unactive product";
                            //    }
                            //Using turnary operator//
                            echo $product['isactive'] ? 'Active product' : 'Unactive Product';
                            ?>
                        </dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-4">Created At:</dt>
                        <dd class="col-md-8"><?= $product['created_at']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-4">Modified At:</dt>
                        <dd class="col-md-8"><?= $product['modified_date']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-4">Is Deleted</dt>
                        <dd class="col-md-8">
                            <?php
                            //    if($product['isactive']==1){
                            //        echo "This is a active product";
                            //    }else{
                            //        echo "This is an unactive product";
                            //    }
                            //Using turnary operator//
                            echo $product['is_deleted'] ? 'Deleted' : 'Not Deleted';
                            ?>
                        </dd>
                    </dl>

                    <dl class="row">
                        <dt class="col-md-4">Picture</dt>
                        <dd class="col-md-8"><img src="../../uploads/<?= $product['picture']; ?>"></dd>
                    </dl>
                    <dl class="row">

                        <dd class="col-md-8"><a href="index.php">Show list</a></dd>
                    </dl>

                </div>
            </div>
        </div>

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>