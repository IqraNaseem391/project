<?php 

$serverName= "Localhost";
$userName = "root";
$password = "";
$database = "hospital_service_system";

$connection = mysqli_connect($serverName,$userName,$password,$database);

if ($connection) {
	echo "DataBase is Connected  <br> ";
}


?>