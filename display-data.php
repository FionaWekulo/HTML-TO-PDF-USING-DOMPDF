<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<title>USER DETAILS</title>
		<!-- font awesome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		 <!-- custom css file link  -->
		 <link rel="stylesheet" text="text/css" href="style.css">
	   
    
<!-- header section starts  -->

<header class="header">
<a href="#"class="logo">WELCOME</a>

<nav class="navbar">
	<a href="get-data.php">Enter Data</a>
	<a href="display-data.php">Display Data</a>
		
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>
</head>

<div class="container">
<body>
<section class="book" id="book">
<br>
<br>
<br>
<br><br>
<h1 class="heading"> <span>VIEW</span> DETAILS </h1>  
<div class="row">

<?php
    include('./connection.php');

		// Query to retrieve data from the database
		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);

		// Check if there are any results
		if ($result->num_rows > 0) {
			// Output data of each row as an HTML table with a button to generate PDF
			echo "<table>";
			echo "<tr><th>NAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phonenumber"]."</td></tr>";

			}
			echo "</table>";
		} else {
			echo "No results found";
		}

		// Close the connection
		$conn->close();
	?>
    <div class="class">
    <a href="create-pdf.php"><button>Print</button></a>

    </div>
    </div>
    </section>
    </body>
</div>
</html>