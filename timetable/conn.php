<?php 
	// connect to database server
	
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$database = "timetable";
	
	$conn = mysqli_connect($server_name, $username, 
				$password, $database);
	
	if(mysqli_connect_errno())
	{
		die( "Connection Failed : " .mysqli_error());
	}?>
