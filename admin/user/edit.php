<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\User;

$id = $_GET['id'];

$_user = new User();

$user = $_user->edit($id);

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
                                    value="<?=$user['id'];?>"
                                    >
                        </div>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUsername" class="col-md-3 col-form-label">Username:</label>
                        <div class="col-md-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputUsername"
                                name="username"
                                 value="<?=$user['username'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-md-3 col-form-label">Password:</label>
                        <div class="col-md-9">
                            <input
                                type="password"
                                class="form-control"
                                id="inputPassword"
                                name="password"
                                 value="<?=$user['password'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputFullname" class="col-md-3 col-form-label">Full Name:</label>
                        <div class="col-md-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputFullname"
                                name="fullname"
                                 value="<?=$user['fullname'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-md-3 col-form-label">Email:</label>
                        <div class="col-md-9">
                            <input
                                type="email"
                                class="form-control"
                                id="inputEmail"
                                name="email"
                                 value="<?=$user['email'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPhonenumber" class="col-md-3 col-form-label">Phone Number:</label>
                        <div class="col-md-9">
                            <input
                                type="number"
                                class="form-control"
                                id="inputPhonenumber"
                                name="phone_number"
                                 value="<?=$user['phone_number'];?>">
                        </div>
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