<?php
	//define constant variables for database connection
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'lab6');

	//make database connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	//test if conneciton is working
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}else{
		echo 'connected to the database<br>';
	}

	if (isset($_POST['sub'])) {
		// get the submitted username and password
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$hash=md5($pwd);
		echo  'Your encrypted password is'.$hash;

	}

	
?>