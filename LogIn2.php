<!DOCTYPE html>
<html>
    <head>
			<meta charset="UTF-8">
			<title>The Dark Times</title>
			<link rel="shortcut icon" href="pictures/ship.ico" type="image/x-icon">
			<link rel="stylesheet" title="Orginal" href="stylesheet.css">

	</head>
         <body>
             <?php
             include 'init.php';
             ?>
		<article>
          <h2>Login</h2>
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
                     <a href="register.php">Register</a>
                     <a href="loggout.php">Logout</a>
                 </li>
                 </ul>
         	 </form>
         	 </div>
         </article>
  	</body>
</html>