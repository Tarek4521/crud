<?php

?>
<section>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>ACCOUNT LOGIN</h4>
				<h6>NEW CUSTOMER</h6>
				<p>Register Account</p>

				<p>By creating an account you will be able to shop faster, be up to date on an order's status, and
					keep
					track of the orders you have previously made.</p>

				<button type="submit" class="btn btn-danger">CONTINUE</button>
			</div>

			<div class="col-md-6">
			<form method="POST" action="<?=$webroot;?>admin/user/login_processor.php" enctype="multipart/form-data">
					<div class="head mt-5">
						<h5>Log In Please</h5>
					</div>
					<div class="mb-3 row">
						<label for="inputUsername" class="col-md-3 col-form-label">Username:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="inputUsername" name="username" value="">
						</div>
					</div>
					<div class="mb-3 mt-3">
						<label for="exampleFormControlInput1" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<button type="submit" class="btn btn-success">LOGIN</button>
				</form>
			</div>
		</div>
	</div>
</section>