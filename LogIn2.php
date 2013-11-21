<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>The Dark Times</title>
		<link rel="shortcut icon" href="pictures/ship.ico" type="image/x-icon">
		<script>
			var StyleFile = "stylesheet";
				if(document.cookie.charAt(6) != "2" && document.cookie.charAt(6) != "3" && document.cookie.charAt(6) != "4")
					StyleFile += ".css";
				else
					StyleFile += document.cookie.charAt(6) + ".css";
				document.writeln('<link rel="stylesheet" type="text/css" href="' + StyleFile + '">');
		</script>
	</head>
    <body>
        <?php
             include 'init.php';
        ?>
		<article>
			<header>
				<h1>Login</h1>
			</header>
          	<div class="reg">
            	<form  action="Login.php" method="post" >
                	<ul id="login">
                 	<li>
                 	    Username: <br>
                 	    <input type="text" name="username">
                 	</li>
                 	<li>
                 	    Password:<br>
                 	    <input type="password" name="password">
                 	</li>
                 	<li>
                 	    <input type="submit" value="Log in">
                 	</li>
                 	<li>
                 	    <a class="link" href="register.php">Register</a>
                 	    <a class="link" href="loggout.php">Logout</a>
                 	</li>
                 	</ul>
         	 	</form>
         	</div>
         </article>
  	</body>
</html>