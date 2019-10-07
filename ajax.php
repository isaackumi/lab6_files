<!DOCTYPE html>

<html>

<head>

	<title>Login Form</title>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script>
	/*
	Using GET in AJAX.

	$(document).ready(function(){
		$("button").click(function(){
			//alert("Button has been clicked!");
			$.get('test.txt',function(data,status){
				//alert(status);
				//alert(data);
				$("#test1").html(data);
			})
		});




	});

	*/

	$(document).ready(function(){
		$("input").keyup(function(){
			var name= $("input").val();
			// unlike GET that accepts two parameters, POST can take 
			// three parameters
			$.post("suggestions.php",{
				suggestion:name
			}, function(data,status){
				$("#test").html(data);
			});
		});
	});


</script>


</head>

<body>

	<h1>Ajax Practice</h1>
	<input type="text" name="name">
	<p id="test"></p> 
<!--
	<button>Click me to get data!</button>
	<p id="test1"></p>

-->


</body>

</html>