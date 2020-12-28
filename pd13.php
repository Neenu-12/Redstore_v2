<?php include('s13.php'); ?>
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
			<img src="images/p14.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p14.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p14a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p14b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p14c.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home</p>
			<h1>Puma Unisex Black Sneakers</h1>
			<h4>$90.00</h4>
			<form action="pd13.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>A pair of round-toe black sneakers, has regular styling, velcro, Synthetic upper, Cushioned footbed, Textured and patterned outsole, Warranty: 3 months, Wipe with a clean, dry cloth to remove dust </p>
		</div>
	</div>
</div>

<!-----reccom---->
<?php include('recom.php'); ?>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>