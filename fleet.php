<?php
include_once('dbconnect.php');


$sql = "SELECT model, car.IMG AS 'img_link', name, street
FROM car
INNER JOIN location
ON car.fk_location = location.ID
INNER JOIN office
ON location.ID = office.fk_location";
				 

$result = mysqli_query($con, $sql);
//var_dump($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP car rent</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">PHP car rent</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		     
		      <li class="nav-item">
		        <a class="nav-link" href="rent.php">Book a car</a>
		      </li>
		      </ul>
		  </div>
		</nav>
	</header>

	<main>
	
	<div class="container">
		<div class="row">
		<?php
		//var_dump($row = mysqli_fetch_assoc($result));
		while ($row = mysqli_fetch_assoc($result)) { ?>
				<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 19rem;">
			  <img class="card-img-top" src="<?php echo $row['img_link'] ?>" alt="Card image cap">
			  
				  <div class="card-body">
				    <h5 class="card-title"><?php //echo $row['author_id']. " " . $row['name'] ?></h5>
				    <ul class="list-unstyled">
				    	<li><em>Model: </em><?php echo $row['model'] ?></li>
				    	<li><em>Location: </em><?php echo $row['name'] ?></li>
				    	<li><em>Street: </em><?php echo $row['street'] ?></li>
				    	
				    	<li><a href="rent.php" class="btn btn-primary">Book me!</a></li>
				    </ul>
				  </div>
				</div>
				<?php
		}

		?>
		</div>
	
	</main>
</body>
</html>
<?php ob_end_flush(); ?>