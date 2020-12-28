<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title> All Products -URcart </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
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
							<span>Sign Up</span>
							<hr id="indicator">
						</div>
						<form id="Signform" action="signup.php" method="post">
							<?php include('errors.php'); ?>
							<input type="text" placeholder="Username" name="name">
							<input type="text" placeholder="E-mail" name="email">
							<input type="number" placeholder="Contact Number" name="number">
							<select name="gender" style="width: 100%;">
								<option value="gender">Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
								<option value="prefer not to say">Prefer Not To Say</option>
							</select>
							<input type="text" placeholder="Address Line 1" name="ad1">
							<input type="text" placeholder="Address Line 2" name="ad2">
							<input type="text" placeholder="District" name="dis">
							<input type="number" placeholder="PIN CODE" name="pinc">
							<input type="text" placeholder="State" name="state">
							<input type="text" placeholder="Country" name="country">
							<input type="password" placeholder="Password" name="pwd">
							<button type="submit" class="btn" name="signup">Sign Up</button>
							<p>Already a user <a href="login.php">Login</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-----footer---->
      <?php include('footer.php'); ?>
</body>
</html>