<?php
include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\User;

$_user = new User();

$user = $_user->show();

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
                    <dd class="col-md-8"><?=$user['id'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">User Name:</dt>
                    <dd class="col-md-8"><?=$user['username'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Password:</dt>
                    <dd class="col-md-8"><?=$user['password'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Full Name:</dt>
                    <dd class="col-md-8"><?=$user['fullname'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Email:</dt>
                    <dd class="col-md-8"><?=$user['email'];?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-md-4">Phone Number:</dt>
                    <dd class="col-md-8"><?=$user['phone_number'];?></dd>
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
