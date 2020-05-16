<!-- <!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">

	<div class="col-md-6">
		<h2> Register Here </h2>
		<form action="registration.php" method="post">
		<div class="form-group">
		<label>Username</label>
		<input type="text" name="user" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group">
		<label>Preference</label>
		<input type="checkbox" name="pref" value="veg" class="form-control">VEG
		<input type="checkbox" name="pref" value="nonv" class="form-control">NON-VEG
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
	</div>
	</div>
</div>


</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>FoodShala</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="registration.php" method="post">
					<span class="login100-form-title">
						Customer Registration
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user" placeholder="User">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="padding: 5%;background-color: aliceblue;border-radius: 40px;">
						<span style="padding:15%;"><input type="checkbox" name="pref" value="veg" style="margin-right:5%;">VEG</span>
						<span><input type="checkbox" name="pref" value="nonv" style="margin-right:5%;">NON-VEG</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

		
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>