<!DOCTYPE html>

<html>

<head>

	<title>Register Form</title>
	<!-- bootstrap css cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- bootstrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script>
$(document).ready(function(){
	$('form').submit(function(event){
		// disable action and method in form
		// ad handle it with JQuery
		event.preventDefault();

		// get data from input
		var name= $('#uname').val();
		var email= $('#email').val();


		$('.message').load("process.php",{
			name:name,
			email:email
		});

	})
});

</script>	

</head>

<body>

	<h1>Register Form</h1>
	<form method="post"action="process.php">
  <div class="row">
    <div class="col">
      <input id="uname" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input id="email" type="text" class="form-control" placeholder="email">
	</div>
	
  </div>
  <br>
  <div id="failed" >
  <button  type="submit" class="btn btn-primary">submit Form</button>
  </div>
  <p class="message" ></p>
</form>
<!--
	<form method="POST" action="process.php">

		<label>Name</label>
		<input type="text" id="uname" name="uname">

		<label>Password</label>
		<input type="password" id="upass" name="upass">

		<input type="submit" value="Register" name="rclicked">

	</form>
-->

</body>

</html>