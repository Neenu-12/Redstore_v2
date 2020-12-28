<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title>RedStore | Ecommerce Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="125px"></a>
		</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
				</ul>
			</nav>
			<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
			<img src="images/menu.png" class="menu-icon">
		</div>
		
		<div>
			<?php if (isset($_SESSION['success'])): ?>
			<div>
				<p><?php echo $_SESSION['success']; ?></p>
                <p><?php unset($_SESSION['success']); ?></p>
			</div>
			<?php endif ?>

			<?php if (isset($_SESSION["name"])): ?>
				<p><strong><?php echo $_SESSION['name']; ?></strong></p>
			    <p><a href="index.php?logout='1'">Logout</a></p>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-2">
				<h1>Give Your Workout<br> A New Style!</h1>
				<p>Success isn't always about greatness. It's about
				 consistency. Consistent<br> hardwork gains success. Greatness
				  will come.</p>
				<a href="products.php" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="images/image1.png">
			</div>
		</div>
	</div>
	</div>
	<!-----featured categories---->
	<div class="categories">
		<div class="small-container">
<div class="row">
			<div class="col-3">
				<img src="images/category-1.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-2.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-3.jpg">
			</div>
		</div>
		</div>
	</div>
	<!-----featured products---->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/p3.webp">
				<h4>Men Sea Green T-Shirt</h4>
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
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
			<div class="col-4">
				<img src="images/p17.webp">
				<h4>Men Olive Green Joggers</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$85.00</p>
			</div>
			<div class="col-4">
				<img src="images/p11.webp">
				<h4>Nike Women Training Shoes</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$250.00</p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/p4c.webp">
				<h4>Men Navy Blue T-shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$80.00</p>
			</div>
			<div class="col-4">
				<img src="images/p8.jpg">
				<h4 >Women Solid Styled Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$90.00</p>
			</div>
			<div class="col-4">
				<img src="images/p5b.webp">
				<h4>Women Grey Printed Top</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$40.00</p>
			</div>
			<div class="col-4">
				<img src="images/p2.1.webp">
				<h4>Men Yellow Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$30.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/p16.jpg">
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
			<div class="col-4">
				<img src="images/p18.jpg">
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
				<img src="images/p22.webp">
				<h4>NOISE Blue Smart Watch</h4>
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
				<img src="images/p13.jpg">
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
		</div>
	</div>
<!-----offer---->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/ex.png" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusively available on RedStore</p>
				<h1>molife Unisex Black Smartwatch Sense-300</h1>
				<small>Smartwatch with customisable faces, Dial Shape: Square, LCD Screen, Water Resistance: IP67, 280 mAh battery.<small><br>
				<a href="pd20.php" class="btn">Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>
<!-----testimonial---->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-1.png">
				<h3>Bella Phillip</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-2.png">
				<h3>Brendon Urie</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-3.png">
				<h3>Mabel Smith</h3>
			</div>
		</div>
	</div>
</div>
<!-----brands---->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="images/logo-godrej.png">
			</div>
			<div class="col-5">
				<img src="images/logo-oppo.png">
			</div>
			<div class="col-5">
				<img src="images/logo-coca-cola.png">
			</div>
			<div class="col-5">
				<img src="images/logo-paypal.png">
			</div>
			<div class="col-5">
				<img src="images/logo-philips.png">
			</div>
		</div>
	</div>
</div>
<!-----footer---->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>DEVELOPED BY :-</h3>
				<p style="font-size: 20px;">NEENU KUMAR<br>
				  251701124<br>
                  ECE-B
				</p>
			</div>
			<div class="footer-col-2">
				<img src="images/logo-white.png">
				<p>Our purpose is to sustainabily make the pleasure and benefits and lifestyle products accessible to the many.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Retuen Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-3">
				<h3>DEVELOPED UNDER GUIDANCE OF :-</h3>
				<p style="font-size: 23px;">
					Dr. Deepak Sood<br>
					Mrs. Priyanka Jangra
				</p>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2020 Urcart</p>
	</div>
</div>
</body>
</html>