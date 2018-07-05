<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['user']) != "") {
	header('Location: rent.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP car rental</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="home.php">PHP car rental</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="fleet.php">Check out our fleet<span class="sr-only">(current)</span></a>
		      </li>
		     <li class="nav-item"><a class="nav-link btn btn-danger"  href="logout.php?logout">Log out</a></li>
		    
		    </ul>
		  </div>
		</nav>
	</header>
	<main>
		
		<div class="row">
		<div class="col-8 col-md-offset-2">
		<form>

				<?php 

				$getcar = "SELECT model, car.IMG AS 'img_link', name, office.ID AS ID
				FROM car
				INNER JOIN office
				ON office.fk_location =".$_GET['fleet'];


				$getuser = "SELECT first_name, last_name, userId
					FROM driver
					WHERE userId =" . $_SESSION['user'];

				echo"<table class='table table-bordered' >
                      <thead>
                        <tr>
                          			     
                        </tr>
                      </thead>";
				$res = mysqli_query($con, $getuser);
				$result = mysqli_query($con, $getcar);

				$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

				
				
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 19rem;">
					<img class="card-img-top" src="<?php echo $row['img_link'] ?>"></>

					<?php echo $row['model'] . " " . $row['name'] ?></>
					</div><?php
				}	
				?>

			</select>

			
		</form>
		</div>		
		
		</div>
	</main>
	
</body>
</html>
<?php ob_end_flush(); ?>