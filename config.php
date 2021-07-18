<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Spark_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Cannot connect to the database: ".mysqli_connect_error());
	}

?>