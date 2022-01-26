<?php
include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Cart;

$_cart = new cart();

$cart = $_cart->edit();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="text-center">Update</h1>
                <form method="post" action="update.php" enctype="multipart/form-data">

                    <div class="mb-3 row">
                        <label for="inputId" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <input
                                    type="hidden"
                                    class="form-control"
                                    id="inputId"
                                    name="id"
                                    value="<?=$cart['id'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUserid" class="col-md-3 col-form-label">User Id:</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputUserid"
                                    name="user_id"
                                    value="<?=$cart['user_id'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-md-3 col-form-label">Product ID:</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputEmail"
                                    name="product_id"
                                    value="<?=$cart['product_id'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputFile" class="col-md-3 col-form-label">Picture:</label>
                        <div class="col-md-9">
                            <input
                                    type="file"
                                    class="form-control"
                                    id="inputFile"
                                    name="picture"
                                    value="<?=$cart['picture'];?>">
                            
                        </div>
                        <img src="<?=$webroot;?>uploads/<?=$cart['picture']?>">
                        <input type="hidden" name="old_picture" value="<?=$cart['picture'];?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-md-3 col-form-label">Product Title:</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputEmail"
                                    name="product_title"
                                    value="<?=$cart['product_title'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-md-3 col-form-label">Quantity:</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputEmail"
                                    name="qty"
                                    value="<?=$cart['qty'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPhone" class="col-md-3 col-form-label">Unit price:</label>
                        <div class="col-md-9">
                            <input
                                    type="number"
                                    class="form-control"
                                    id="inputEmail"
                                    name="unite_price"
                                    value="<?=$cart['unite_price'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPhone" class="col-md-3 col-form-label">Total price:</label>
                        <div class="col-md-9">
                            <input
                                    type="number"
                                    class="form-control"
                                    id="inputEmail"
                                    name="total_price"
                                    value="<?=$cart['total_price'];?>">
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>

                </form>

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