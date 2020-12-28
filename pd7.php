<?php include('s7.php'); ?>
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
			<img src="images/p8.jpg" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p8.jpg" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p8a.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p8b.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p8c.jpg" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / T-Shirt</p>
			<h1>Women Solid Styled Black Top</h1>
			<h4>$90.00</h4>
			<form action="pd7.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>Black solid woven styled back top, has a mandarin collar, long sleeves, concealed hook-and-eye closures.<br>Polyester<br> Machine-wash</p>
		</div>
	</div>
</div>

<!-----recomm---->
<?php include('recom.php'); ?>

<!-----footer---->
<?php include('footer.php'); ?>
</body>
</html>