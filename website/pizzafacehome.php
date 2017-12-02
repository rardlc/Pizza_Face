<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '389715768118347',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.11'
        });


        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });

      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

       function statusChangeCallback(response){
         if(responce.status === 'connected'){
           console.log('logged in and authenticated');
         }
         else{
           console.log('Not authenticated');
         }


       }
    </script>
  </body>

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
		header("Location: success.php");
		}

	}
?>
<<<<<<< HEAD
	<body>
	<form method="post" action="pizzafacehome.php">
		Username: <br/>
		<input type="text" name="username"><br/>
		Password<br/>
		<input type="text" name="username"><br/>
		<input type="submit" value="Login!">
	</body
</html>
=======

</html>
>>>>>>> 27763b979973810d5a0265b5727416b38562406b
