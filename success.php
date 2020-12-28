<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          .jumbo{
            max-width: 800px;
            margin-left: 220px;
            margin-top: 100px;
          }
        </style>
</head>
<body>
<?php include('header.php'); ?>
  <div class="col-xs-3">
  <div class="container">
      <div class="jumbotron jumbo">
      	<h2>Your order is confirmed.Thank you for shopping
with us.</h2>
      <p><a href="products.php" style="color:blue;">Click here</a> to purchase any other item.</p>
      </div>
    </div>
  </div>
  <div style="width:100%; max-height :50px;margin-top: 500px;">
   <?php include('footer.php'); ?>
 </div>
</body>
</html>