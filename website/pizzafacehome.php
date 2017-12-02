<html>

<?php
	session_start();
	
	#THIS IS REALLY BAD, MAKE SURE TO USE DATABASE
	$username = "user";
	$password = "password";
	
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			header("Location: success.php");
			#profile page or whatever they need to login for
		
	}
	if(isset($_POST['username']) && isset($_POST['password'])){
		if ($_POST['username'] == $username && $_POST['password'] == $password){
		$_SESSION['loggedin'] = true;
		header("Location: success.php")
		}
		
	}
?>
	<body>
	<form method="post" action="pizzafacehome.php">
		Username: <br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="text" name="username"><br/>
		<input type="submit" value="Login!">
	</body
</html>