<!DOCTYPE html>
<html>
    <head>
         <body>
             <?php
             include 'init.php';
             ?>
             
          <h2>Login</h2>
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
        
        </body>
   </head>
</html>