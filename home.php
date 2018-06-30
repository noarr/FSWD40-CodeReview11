<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['user']) != "") {
	header('Location: home.php');
	exit;
}

//select ligged in user
$query = "SELECT first_name, last_name
					FROM driver
					WHERE userId =" . $_SESSION['user'];
$res = mysqli_query($con, $query);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
    opacity: 0.9;
}

.bg {
    /* The image used */
    background-image: url("cars2.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">PHP car rental</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">		    
		      <li class="nav-item">
		        <a class="nav-link" href="rent.php">Rent a car</a>
		      </li>
		    
		      <li class="nav-item"><a class="nav-link btn btn-danger"  href="logout.php?logout">Log out</a></li>

		    </ul>
		  </div>
		</nav>
	</header>
	<main>
			
			<h1 class="display-4">Welcome, dear <?php echo $userRow['first_name'] . ' ' . $userRow['last_name']; ?></h1>
					  
	</main>
	<div class="bg"></div>
</body>
</html>
<?php ob_end_flush(); ?>