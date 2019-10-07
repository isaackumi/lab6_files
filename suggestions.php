<?php

$existingNames = array("Daniel","Dennis","Danny","Jane");
if (isset($_POST["suggestion"])) {
	$name = $_POST['suggestion'];

	if (!empty($name)) {
		// use foreach loop for arrays
	foreach ($existingNames as $existingName) {
		if (strpos($existingName, $name) !== false) {
			echo $existingName;
			echo "<br>";
		}

	
	}
		
	}

	
	
}

?>