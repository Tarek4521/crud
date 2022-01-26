<?php
include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Cart;

$_cart = new cart();

$cart = $_cart->show();

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
                    <dt class="col-md-4">SLD:</dt>
                    <dd class="col-md-8"><?=$cart['user_id']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Product ID:</dt>
                    <dd class="col-md-8"><?=$cart['product_id']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Picture:</dt>
                    <dd class="col-md-8"><img src="<?=$webroot;?>uploads/<?=$cart['picture'];?>" alt="<?=$cart['picture'];                      ?>"></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Product Title:</dt>
                    <dd class="col-md-8"><?=$cart['product_title']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Quantity:</dt>
                    <dd class="col-md-8"><?=$cart['qty']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Unit Price:</dt>
                    <dd class="col-md-8"><?=$cart['unite_price']?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Total Price:</dt>
                    <dd class="col-md-8"><?=$cart['total_price']?></dd>
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
