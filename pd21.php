<?php include('s21.php'); ?>
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
			<img src="images/p22.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p22.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p22a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p22b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p22c.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home</p>
			<h1>NOISE Unisex Blue Evolve Full Touch Control Smart Watch with AMOLED Display wrb-sw-evolve-std-blu</h1>
			<h4>$260.00</h4>
			<form action="pd21.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>NoiseFit Evolve Full Touch Control Smart Watch,Compatibility: Android and iOS,Display type: AMOLED, 3 Day Battery Life<br>
				Smart Assistant: Simple touch, Bluetooth version: V5.0, Water resistance: IP68, Step Counting, Sleep Tracking<br> 24/7 Heart Rate Monitoring, 9 Sports Modes, Warranty: 1-year warranty against manufacturing defects</p>
		</div>
	</div>
</div>

<!-----reccom---->
<div class="container">
	<div class="row row-2">
		<h2>You May Also Like</h2>
		<a href="products.php"><p>View More</p></a>
	</div>
</div>
	<div class="small-container">
		
		<div class="row">
			<div class="col-4">
				<a href="pd2.php"><img src="images/p3.webp"></a>
				<h4>Men Sea Green T-shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$60.00</p>
			</div>
			<div class="col-4">
				<a href="pd5.php"><img src="images/p6.webp"></a>
				<h4>Women White Solid Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$70.00</p>
			</div>
			<div class="col-4">
				<a href="pd1.php"><img src="images/p2.1.webp"></a>
				<h4>>Men Yellow T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$30.00</p>
			</div>
			<div class="col-4">
				<a href="pd8.php"><img src="images/p9.webp"></a>
				<h4>Men Off-White & Blue Shoes</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$80.00</p>
			</div>
		</div>
	</div>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>