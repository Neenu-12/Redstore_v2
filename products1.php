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
				<a href="pd12.php"><img src="images/p13.jpg"></a>
				<h4>Women Pink Running Shoe</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$95.00</p>
			</div>
			<div class="col-4">
				<a href="pd13.php"><img src="images/p14.webp"></a>
				<h4>Puma Black Sneakers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$90.00</p>
			</div>
			<div class="col-4">
				<a href="pd14.php"><img src="images/p15.webp"></a>
				<h4>ADIDAS Men Black Sneakers</h4>
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
				<a href="pd15.php"><img src="images/p16.jpg"></a>
				<h4>ADIDAS Woven P8.1 Shoes</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$230.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="pd16.php"><img src="images/p17.webp"></a>
				<h4>Men Olive Green Joggers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
			<div class="col-4">
				<a href="pd17.php"><img src="images/p18.jpg"></a>
				<h4>Men Beige Regular Trousers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$115.00</p>
			</div>
			<div class="col-4">
				<a href="pd18.php"><img src="images/p19.jpg"></a>
				<h4>Women Regular Fit Trousers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$100.00</p>
			</div>
			<div class="col-4">
				<a href="pd19.php"><img src="images/pd20.jpg"></a>
				<h4>Roadster Charcoal Grey Trousers</h4>
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
		<div class="row">
			<div class="col-4">
				<a href="pd20.php"><img src="images/p21.webp"></a>
				<h4>molife Unisex Black Smartwatch Sense-300</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$290.00</p>
			</div>
			<div class="col-4">
				<a href="pd21.php"><img src="images/p22.webp"></a>
				<h4>NOISE Unisex Blue Evolve AMOLED Display Smart Watch </h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$260.00</p>
			</div>
			<div class="col-4">
				<a href="pd22.php"><img src="images/p23.webp"></a>
				<h4>Fastrack Unisex Black & Green Reflex 2.0 Smart Band</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$190.00</p>
			</div>
			<div class="col-4">
				<a href="pd23.php"><img src="images/p24.webp"></a>
				<h4>Fossil Men Grey Explorist HR Smartwatch FTW4012</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$280.00</p>
			</div>
		</div>
		<div class="page-btn">
			<a href="products.php"><span>1</span></a>
			<span><a href="products1.php">2</a></span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
		</div>
	</div>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>