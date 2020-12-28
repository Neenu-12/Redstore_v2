<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title> All Products -URcart </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include('header.php'); ?>

<!-----single product details---->
<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="images/gallery-1.jpg" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/gallery-1.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/gallery-2.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/gallery-3.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/gallery-4.jpg" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / T-Shirt</p>
			<h1>Men Red Printed Round Neck T-Shirt</h1>
			<h4>$50.00</h4>
			<form action="pd.php" method="post"> <button type="submit" name="sale" class="btn">Buy Now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>Keep this hip this season with the HRX Men's Athleisure T-shirt. This versatile T-shirt can be styled any way you like for the ultimate gym-to-street look.</p>
		</div>
	</div>
</div>
<!-----title---->
<?php include('recom.php'); ?>

<!-----footer---->
<?php include('footer.php'); ?>
</html>