<?php include('s5.php'); ?>
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
			<img src="images/p6.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p6.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p6a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p6b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p6c.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home</p>
			<h1>Women White Solid High-Neck Top</h1>
			<h4>$70.00</h4>
			<form action="pd5.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>White solid knitted regular top, has a high neck, and long sleeves.<br> Material: 96% cotton, 4% elastane<br> Machine-wash</p>
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
				<img src="images/p3.webp">
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
				<img src="images/p7.webp">
				<h4>Women Teal Blue Solid Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
			<div class="col-4">
				<img src="images/p22.webp">
				<h4>NOISE Evolve Smart Watch</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$260.00</p>
			</div>
			<div class="col-4">
				<img src="images/p9.webp">
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