<?php

$approot = $_SERVER['DOCUMENT_ROOT']."/crud/";

include_once($approot."vendor/autoload.php");

use Bitm\Order;

$_order = new Order();

$orders = $_order->index();

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List</title>
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
                <h1 class="text-center">List</h1>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create.php">Add a new item</a>
                    </li>
                </ul>
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($orders as $order):

                ?>
                <tr>
                    <td><?= $order['Product_id'];?></td>
                    <td><a href="show.php?id=<?=$order['id']?>">Show</a> | <a href="edit.php?id=<?=$order['id']?>">Edit</a> | <a href="delete.php?id=<?=$order['id']?>">Delete</a></td>
                </tr>
                <?php
                endforeach;
                ?>
                </tbody>
                </table>
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

