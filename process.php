<?php
	//declare variables for my database connection 
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'lab6');


	//connection 
	$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);

	// Check connection
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}else{
		echo 'connected to the database<br>';
	}



	//check which button has been clicked
	if (isset($_POST['rclicked'])) {


		// get the submitted username and password
		$username=$_POST['uname'];
		$pwd=$_POST['upass'];
		$hash=md5($pwd);

		echo $username;
		echo $pwd;
		
		// create sql query to select user from database
		//$sql='SELECT * FROM 'users' WHERE 'username'=$username AND 'password'=$password';

		//run the query and store result
$sql="INSERT INTO `users` (username,pwd) VALUES ('$username','$hash')";
$sql1='DESCRIBE users';
		
		
		//check if results were retrieved
		if (mysqli_query($connection,$sql)==true) {

			echo 'Data added to database';
			header("location:login.php");
	    	// fetch result as an array
	        
	        // display result

		} else {
			// display error message
			echo 'An error occured';
			header("location:register.php");
		}

		mysqli_close($connection);
		// close database connection

	} else if (isset($_POST['lclicked'])) {

		// get the submitted username and password
		$username=$_POST['uname'];
		$pwd=$_POST['upass'];

		// create sql query to insert user into the database
		$sql="SELECT * FROM users WHERE username='$username' && pwd='$pwd'";
		//run the query and store result
		
		//check if results were retrieved
		if (mysqli_query($connection,$sql)==true) {
	    	// redirect user to login page
		} else {
	    	
			echo 'login error';
			// display error
		}

		// close database connection
		mysqli_close($connection);
	}
?>