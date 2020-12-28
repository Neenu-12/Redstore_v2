<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title> All Products -URcart </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include('header.php'); ?>
	
	<!-----account page---->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/image1.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span>Login</span>
							<hr id="indicator">
						</div>
						<form id="Loginform" action="login.php" method="post">
							<?php include('errors.php'); ?>
							<input type="text" placeholder="Username" name="name">
							<input type="password" placeholder="Password" name="pwd">
							<button type="submit" class="btn" name="login">Login</button>
							<a href="">Forgot Password</a><br>
							<p>New user <a href="signup.php">Sign Up</a> </p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>