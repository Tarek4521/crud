<?php
include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Product;

$_product = new Product();

$product = $_product->show();

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
                    <dd class="col-md-8"><?=$product['id'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Title:</dt>
                    <dd class="col-md-8"><?=$product['title'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Price:</dt>
                    <dd class="col-md-8"><?=$product['price'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Is Active:</dt>
                    <dd class="col-md-8">
<!--                        --><?php
//                        if ($product['is_active'] == 1){
//                            echo "This product is active.";
//                        }else{
//                            echo "This product is not active!";
//                        }
//                        ?>
                        <?= $product['is_active']? 'Activated': 'Deactivated';?>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Created At:</dt>
                    <dd class="col-md-8"><?=$product['created_at'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Modified At:</dt>
                    <dd class="col-md-8"><?=$product['modified_at'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Picture:</dt>
                    <dd class="col-md-8"><img src="<?=$webroot;?>uploads/<?=$product['picture'];?>"alt="<?=$product['picture'];?>"></dd>
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
