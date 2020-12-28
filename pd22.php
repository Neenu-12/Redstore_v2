<?php include('s22.php'); ?>
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
			<img src="images/p23.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p23.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p23a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p23b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p23c.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home</p>
			<h1>Fastrack Unisex Black & Green Reflex 2.0 Smart Band</h1>
			<h4>$190.00</h4>
			<form action="pd22.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>Dial Color: Black, Case Shape: Rectangular, Band Color: Black,Watch Movement Type: processor, Watch Display Type: Digital
Case Material: Plastic,Touch screen; Note: Please charge the device completely before use, 1 year manufacturer warranty on manufacturing defects<br>
				It tracks the number of steps you have taken, the total distance you have travelled and the number of calories that you have burned, It helps you to have an active lifestyle with an inbuilt sedentary reminder which you can customise as per your lifestyle, It helps you track your sleep patterns, in the bed and off it
It acts as a remote control to click pictures on your phone, after all who doesn?t love to take the perfect selfie<br> Remove plastic at crown to start the watch</p>
		</div>
	</div>
</div>

<!-----reccom---->
<?php include('recom.php'); ?>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>