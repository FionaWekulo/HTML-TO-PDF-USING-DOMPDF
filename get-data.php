<?php

include('./connection.php');

if(isset($_POST['send']))
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
	 
	$sql = "INSERT INTO users (name, email, phonenumber) VALUES ('$name', '$email', '$phonenumber')";
	if($conn->query($sql) === TRUE){
		echo "Record Added Sucessfully";
	   }
	   else
	   {
		echo "Error" . $sql . "<br/>" . $conn->error;
	   }
	   $conn->close();
	   }
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<title>ENTER DETAILS</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="style.css">
	   
    
<!-- header section starts  -->

<header class="header">
<a href="#" class="logo">WELCOME</a>

<nav class="navbar">
	<a href="get-data.php">Enter Data</a>
	<a href="display-data.php">Display Data</a>
		
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
</head>

<div class="container">
<body>
<section class="page" id="page">
<br>
<br>
<br>
<br><br><h1 class="heading"> <span>ENTER </span> DETAILS </h1>  
<div class="row">
					<form method="POST"  action="get-data.php">
						<div class="form-group">
							<label>Full Name<span class="text-danger">*</span></label>
							<input type="text" name="name" id="name" class="box" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Email Address<span class="text-danger">*</span></label>
							<input type="email" name="email" id="email" class="box" required  data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
						    <label>Phone Number<span class="text-danger">*</span></label>
							<input type="text" name="phonenumber" id="phonenumber" class="box" required  data-parsley-trigger="keyup" />
						</div>
						<div class="form-group text-center">
							<input type="submit" name="send" id="send" class="btn btn-primary" value="send" />
						</div>
					</form>
					
</div>
</section>
</body>
</div>
</html>