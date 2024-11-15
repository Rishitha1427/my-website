<?php
	
	$server ='localhost';
	$un='root';
	$pass='';
	$db='roshe_kasu';

	$con=mysqli_connect($server, $un, $pass, $db);

	if($con){

		echo "connected";
	}

	else{
		die(mysql_error($con));
	}
?>	