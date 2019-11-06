<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>

	<script type="text/javascript" src="myajax.js"></script>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
</head>
<body>
	<div style="margin: 0 auto; text-align: center; padding-top: 10%; font-size: 20px;">
		<h1>Learn Ajax</h1>

		<form method="post">
			<label>Search Term</label>
			<input onkeyup="spinUpServer()" type="text" autofocus size="25" name="sterm" id="shterm">
			<!--

			<input onclick = "gotoServer()" type="submit" name="findme" value="Search">
			-->
		</form>
	
		<span id = "showhere"></span>
	</div>
</body>
</html>