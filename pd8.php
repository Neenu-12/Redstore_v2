<?php include('s8.php'); ?>
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
			<img src="images/p9.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p9.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p9a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p9b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p9c.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / T-Shirt</p>
			<h1>Men Off-White & Blue Mesh Running Shoes</h1>
			<h4>$80.00</h4>
			<form action="pd8.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>A pair of off-white & blue running sports shoes, has regular styling, lace-up detail, Mesh upper, Cushioned footbed , Textured and patterned outsole, Warranty: 3 months, Warranty provided by brand/manufacturer</p>
		</div>
	</div>
</div>

<!-----recomm---->
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
				<img src="images/p6.webp">
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
				<img src="images/p7.webp">
				<h4>Women Teal Blue Solid Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
		</div>
	</div>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>