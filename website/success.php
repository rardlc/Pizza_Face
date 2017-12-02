<?php
	#check if user is allowed to use this page
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
		header("Location: pizzafacehome.php");
	}

?>
<h1>"Congrats!"</h1>