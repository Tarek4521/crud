<?php 

?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="text-center">Add New</h1>
                <form method="post" action="<?=$webroot;?>admin/user/SignUpFormStore.php" enctype="multipart/form-data">

                    <div class="mb-3 row">
                        <label for="inputId" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <input
                                type="hidden"
                                class="form-control"
                                id="inputId"
                                name="id"
                                value="">
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
                                value="">
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
                                value="">
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
                                value="">
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
                                value="">
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
                                value="">
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