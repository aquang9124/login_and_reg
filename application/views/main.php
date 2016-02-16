<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration and Log In</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.error {
		color: red;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php 
					if ($this->session->flashdata("login_error"))
					{
						echo $this->session->flashdata("login_error");
					}
				?>
				<fieldset>
					<legend>Log In</legend>
					<form action="logmein" method="post" role="form">
						<div class="form-group">
							<label for="e-mail">Email:</label>
							<input type="email" name="email" id="e-mail">
						</div>
						<div class="form-group">
							<label for="pass">Password:</label>
							<input type="password" name="password" id="pass">
						</div>
						<button class="btn btn-info">Login</button>
					</form>
				</fieldset>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<fieldset>
					<legend>Registration</legend>
					<form action="register" method="post" role="form">
						<div class="form-group">
							<label for="first-name">First Name:</label>
							<input type="text" name="first_name" id="first-name">
						</div>
						<div class="form-group">
							<label for="last-name">Last Name:</label>
							<input type="text" name="last_name" id="last-name">
						</div>
						<div class="form-group">
							<label for="email1">Email Address:</label>
							<input type="email" name="email" id="email1">
						</div>
						<div class="form-group">
							<label for="pass1">Password:</label>
							<input type="password" name="password" id="pass1">
						</div>
						<div class="form-group">
							<label for="pass2">Confirm Password:</label>
							<input type="password" name="passconf" id="pass2">
						</div>
						<button class="btn btn-info">Register</button>
					</form>
				</fieldset>
			</div>
		</div>
	</div>
</body>
</html>