<?php include('s12.php'); ?>
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
			<img src="images/p13.jpg" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p13.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p13a.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p13b.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p13c.jpg" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home</p>
			<h1>Women Pink Flash Knit Running Shoe</h1>
			<h4>$95.00</h4>
			<form action="pd12.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>These HRX by Hrithik Roshan running shoes from flash knit collection will make you want to go the extra mile. Look trendy while on a run in these pink shoes and a bright tracksuit. Ideal for running on roads, Designed to provide neutral support to your feet and ankle, Constructed with knitted fabric, Cushion collar provides ankle support, EVA sole makes the shoe lightweight, Weight: Lightweight </p>
		</div>
	</div>
</div>

<!-----reccom---->
<?php include('recom.php'); ?>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>