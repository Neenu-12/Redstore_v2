<?php include('server.php');
// if user isn't login then can't access the page
if (empty($_SESSION['name'])) {
	header('location: login.php');
}
 ?>

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
    <div class="small-container">
		<div class="row row-2">
			<h2>All Products</h2>
		</div>
	
		<div class="row">
			<div class="col-4">
				<a href="pd.php"><img src="images/product-1.jpg"></a>
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<a href="pd1.php"><img src="images/p2.1.webp"></a>
				<h4>Men Yellow Printed Round Neck T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$30.00</p>
			</div>
			<div class="col-4">
				<a href="pd2.php"><img src="images/p3.webp"></a>
				<h4>Men Sea Green Solid Round Neck T-shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$60.00</p>
			</div>
			<div class="col-4">
				<a href="pd3.php"><img src="images/p4.webp"></a>
				<h4>Men Navy Blue Colourblocked Hooded Slim Fit T-shirt</h4>
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
		<div class="row">
			<div class="col-4">
				<a href="pd4.php"><img src="images/p5.webp"></a>
				<h4>Women Grey Printed Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$40.00</p>
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
				<a href="pd6.php"><img src="images/p7.webp"></a>
				<h4>Women Teal Blue Solid Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
			<div class="col-4">
				<a href="pd7.php"><img src="images/p8.jpg"></a>
				<h4>Women Solid Styled Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$90.00</p>
			</div>
		</div>
		<div class="row">
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
			<div class="col-4">
				<a href="pd9.php"><img src="images/p10.webp"></a>
				<h4>Puma Men Black Sneakers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$100.00</p>
			</div>
			<div class="col-4">
				<a href="pd10.php"><img src="images/p11.webp"></a>
				<h4>Nike Women Training Shoes</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$250.00</p>
			</div>
			<div class="col-4">
				<a href="pd11.php"><img src="images/p12.webp"></a>
				<h4>El Paso Sports Shoes</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$75.00</p>
			</div>
		</div>
		<div class="page-btn">
			<span>1</span>
			<a href="products1.php"><span>2</span></a>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
		</div>
	</div>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>