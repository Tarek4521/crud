<?php

include_once($_SERVER['DOCUMENT_ROOT']."/crud/config.php");

use Bitm\Banner;

$id = $_GET['id'];


$_banner = new Banner();

$banner = $_banner->edit($id);


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


<section class="mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <div class="sp-3 success">
                    <?php
                    echo $_SESSION['message'];
                    $_SESSION['message'] =" ";
                    ?>
                <h1 class="text-center mb-4">Add New</h1>
                <form method="post" action="update.php" enctype="multipart/form-data">

                    <div class="form-group">


                        <label for="inputId" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input
                                    type="hidden"
                                    class="form-control"
                                    id="inputId"
                                    name="id"
                                    value="<?=$banner['id'];?>"
                            >

                        </div>
                    </div>
                    <div class="form-group">


                        <label for="title" class="col-sm-3 col-form-label">banner-title</label>
                        <div class="col-sm-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="banner-title"
                                    name="title"
                                    value="<?=$banner['title'];?>"
                            >

                        </div>
                    </div>

                    <div class="form-group mb-3">


                        <label for="link" class="col-sm-3 col-form-label">Link</label>
                        <div class="col-sm-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="link"
                                    name="link"
                                    value="<?=$banner['link'];?>"
                            >
                        </div>

                    </div>
                    <div class="form-group mb-3">


                        <label for="link" class="col-sm-3 col-form-label">Promotional Message</label>
                        <div class="col-sm-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="link"
                                    name="promotional_message"
                                    value="<?=$banner['promotional_message'];?>"
                            >
                        </div>
                        <label for="link" class="col-sm-3 col-form-label">HTML banner</label>
                        <div class="col-sm-9">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="link"
                                    name="html_banner"
                                    value="<?=$banner['html_banner'];?>"
                            >
                        </div>

                    </div>
                    <div class="mb-3 row form-check">
                        <div class="col-md-9">
                            <?php if($banner['is_active']==0){?>
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
                    <div class="mb-3 row form-check">
                        <div class="col-md-9">
                            <?php if($banner['is_draft']==0){?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="inputIsDraft"
                                        name="is_draft"
                                        value="1">
                            <?php }else{?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="inputIsDraft"
                                        name="is_draft"
                                        value="1"
                                        checked>
                            <?php   } ?>
                        </div>
                        <label for="inputIsDraft" class="col-md-3 form-check-label">Is Draft</label>
                    </div>


                    <div class="form-group mb-3">
                        <label for="inputFile" class="col-md-3 col-form-label">Picture:</label>
                        <div class="col-md-9">
                            <input
                                    type="file"
                                    class="form-control"
                                    id="inputFile"
                                    name="picture"
                                    value="<?=$banner['picture'];?>">
                        </div>
                        <img src="<?=$webroot;?>uploads/<?=$banner['picture']?>">
                        <input type="hidden" name="old_picture" value="<?=$banner['picture'];?>">
                    </div>


                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>