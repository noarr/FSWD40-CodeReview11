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
		<h1>Fill the form to rent a car</h1>
		<div class="row">
		<div class="col-8 col-md-offset-2">
		<form>

			<select class="custom-select" name="media_id">
				<option selected>Select your car</option>
				<?php 

				$getmedia = "SELECT author.lastname, author.firstname AS 'Author', media.title, media.type AS 'Media'
				FROM car
				INNER JOIN author
					ON media.fk_media = author.fk_media";


				$getuser = "SELECT first_name, last_name, userId
					FROM driver
					WHERE userId =" . $_SESSION['user'];

				//$getlocation ="SELECT locations.location_id, locations.name, locations.city, locations.street, locations.house_number, locations.zip_code 
					//FROM locations
					//WHERE location_id ";
	echo"<table class='table table-bordered' >
                      <thead>
                        <tr>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>title</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>img</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>author</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>publisher</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>isbn code</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>publish date</th>
                          <th scope='col' style='border-color:#F05F40; text-align:center;'>description</th>				     
                        </tr>
                      </thead>";
				$res = mysqli_query($con, $getuser);
				$result = mysqli_query($con, $getmedia);

				$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

				
				
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<option value="<?php echo $row['media_id'] ?>"><?php echo $row['Author'] . " " . $row['Media'] ?></option>
					<?php
				}	
				?>
			</select>

			<div class="form-group">
				<label for="exampleFormControlInput1">First name</label>
				<input type="text" class="form-control" name="first_name" placeholder="<?php echo $userRow['first_name']?>" disabled><!--id="exampleFormControlInput1"-->
			</div>
			<input style="display:none;" name="user_id" type="text" value="<?php echo $userRow['user_id']; ?>">
			<div class="form-group">
				<label for="exampleFormControlInput1">Last name</label>
				<input type="text" class="form-control" name="last_name" placeholder="<?php echo $userRow['last_name']?>" disabled>
			</div>


			
			
			<div class="form-group">
				<label for="exampleFormControlInput1">Start date</label>
				<input name="start_date" id="datepicker3"> <!--id="datepicker-->
			</div>

			<div class="form-group">
				<label for="exampleFormControlInput1">Finish date</label>
				<input name="finish_date" id="datepicker4"> <!--id="datepicker-->
			</div>

			<!--<div class="form-group">
				<label for="exampleFormControlTextarea1">Example textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>-->
		</form>
		</div>		
		
		</div>
	</main>
	<script> $('#datepicker1').datepicker();</script>
	<script> $('#datepicker2').datepicker();</script>
	<script> $('#datepicker3').datepicker();</script>
	<script> $('#datepicker4').datepicker();</script>

	 <a class="nav-link" href="rent.php">Book a media</a>
</body>
</html>
<?php ob_end_flush(); ?>