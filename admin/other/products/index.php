<?php
/*echo $_SERVER['DOCUMENT_ROOT']. "/crud/";
//
die();*/
$approot = $_SERVER['DOCUMENT_ROOT'] . "/crud/";
include_once($approot . "vendor/autoload.php");

use Bitm\Product;


$_product = new Product();

$products = $_product->index();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wIdth=device-wIdth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message'] = "";
                    ?>
                    <h1 class="text-center mb-4">LIST</h1>
                    <ul class="nav justify-content-center fs-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="create.php">Add new item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="trash_index.php">Go to trash item</a>
                        </li>
                    </ul>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Satus</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($products) > 0) :
                                foreach ($products as $product) : //for loop is used for print multiple table data//

                            ?>
                                    <tr>
                                        <td> <?= $product['title']; ?> </td>
                                        <td> <?= $product['isactive'] ? 'Active product' : 'Unactive Product'; ?> </td>
                                        <td> <a href="show.php?id=<?= $product['id']; ?>">Show</a>
                                        <td><a href="edit.php?id=<?= $product['id']; ?>">Edit</a> </td>
                                        <td><a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('Are you sure you want to delete')">Delete</a> </td>
                                        <td><a href="trash.php?id=<?= $product['id']; ?>" onclick="return confirm('Are you sure you want to delete')">Trash</a> </td>

                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            else : ?>
                                <tr>
                                    <td colspan="2">No products available <a href="create.php">Click here to add one</a></td>
                                </tr>
                            <?php
                            endif;
                            ?>
                        </tbody>
                    </table>
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