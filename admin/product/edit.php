<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Product;

$id = $_GET['id'];

$_product = new Product();

$product = $_product->edit($id);

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
            <div class="sp-3 success">
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message'] =" ";
                    ?>
            </div>
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
                                    value="<?=$product['id'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-md-3 col-form-label">Title:</label>
                        <div class="col-md-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputTitle"
                                    name="title"
                                    value="<?=$product['title'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPrice" class="col-md-3 col-form-label">MRP:</label>
                        <div class="col-md-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputPrice"
                                name="price"
                                 value="<?=$product['price'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row form-check">
                        <div class="col-md-9">
                            <?php if($product['is_active']==0){?>
                            <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="inputIsActive"
                                    name="is_active"
                                    value="1">
                            <?php }else{?>
                            <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="inputIsActive"
                                    name="is_active"
                                    value="1"
                                    checked>
                         <?php   }?>
                        </div>
                        <label for="inputIsActive" class="col-md-3 form-check-label">Is Active</label>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputFile" class="col-md-3 col-form-label">Picture:</label>
                        <div class="col-md-9">
                            <input
                                    type="file"
                                    class="form-control"
                                    id="inputFile"
                                    name="picture"
                                    value="<?=$product['picture'];?>">
                        </div>
                        <img src="<?=$webroot;?>uploads/<?=$product['picture']?>">
                        <input type="hidden" name="old_picture" value="<?=$product['picture'];?>">
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