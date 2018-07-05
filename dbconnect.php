<?php 

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'cr11_nora_horvath_php_car_rental');

$con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if(!$con) {
	die("Connection failed: " . mysqli_error());
} else {
	echo "";
}

 ?>