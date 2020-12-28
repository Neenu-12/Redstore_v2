<?php
session_start();

 $name = "";
 $email= "";
 $address1 = "";
 $address2 = "";
 $phone="";
 $pin="";
 $gender= "";
 $country = "";
 $district = "";
 $errors = array();

$db = mysqli_connect('localhost', 'root', '', 'urcart');


if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);
	$address1 = mysqli_real_escape_string($db, $_POST['ad1']);
	$address2 = mysqli_real_escape_string($db, $_POST['ad2']);
	$phone = mysqli_real_escape_string($db, $_POST['number']);
    $pin = mysqli_real_escape_string($db, $_POST['pinc']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $district = mysqli_real_escape_string($db, $_POST['dis']);

	if (empty($name)) {
		array_push($errors,"Username is required");
	}
	if (empty($email)) {
		array_push($errors,"Email is required");
	}
	if (empty($pwd)) {
		array_push($errors,"Password is required");
	}
	if (empty($address1)) {
		array_push($errors,"Address is required");
	}
	if (empty($phone)) {
		array_push($errors,"Phone number is required");
	}
	if (empty($pin)) {
		array_push($errors,"Pincode is required");
	}
	if (empty($gender)) {
		array_push($errors,"Gender is required");
	}
	if (empty($country)) {
		array_push($errors,"Country name is required");
	}
	if (empty($district)) {
		array_push($errors,"District name is required");
	}

	//if no error save user to database
	if (count($errors) == 0) {
		$password = md5($pwd);
		$sql = "INSERT INTO users (usersName, usersEmail, usersPwd,Addressline1, Addressline2, gender, country, PinCode, district, contact) VALUES ('$name','$email','$password','$address1','$address2','$gender', '$country', '$pin', '$district','$phone')";
		mysqli_query($db, $sql);
		$_SESSION['name'] = $name;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}
}

   // log the user in
   if (isset($_POST['login'])) {
   	$name = mysqli_real_escape_string($db, $_POST['name']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

	if (empty($name)) {
		array_push($errors,"Username is required");
	}
	if (empty($pwd)) {
		array_push($errors,"Password is required");
	}
	if (count($errors) == 0) {
		$password = md5($pwd);
		$query = "SELECT * FROM users WHERE usersName ='$name' AND usersPwd ='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['name'] = $name;
		    $_SESSION['success'] = "You are now logged in";
		    header('location: index.php');
		} else {
			array_push($errors, "wrong name/password combination");
		}
	}
}



  // logout
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header('location: login.php');
  }
//sales
 if (empty($_SESSION['name'] )) {
 	//
 }
 else{
 	if(isset($_POST['sale'])){
$name= $_SESSION['name'] ;
$pid = "2";
$quer = "INSERT INTO userprod (usersId, pid) VALUES ('$name','$pid')";
mysqli_query($db,$quer);
header('location: success.php');
}
}
?>