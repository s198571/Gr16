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

if (empty($_POST) === FALSE){
    $required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === TRUE){
        $errors[] = 'Fields marked with star are required';
        break 1;
        }
    }
    if (empty($errors) === TRUE) {
        if (user_exists($_POST['username']) === TRUE){
            $errors [] = 'Sorry, the username \'' . ($_POST['username']) . '\' is alredy take';
        }
        if(preg_match("/\\s/", $_POST['username']) == TRUE){
            $errors[] = 'your username must not contain any spaces';
        }
        if (strlen($_POST['password']) <6){
            $errors[] = 'Your password needs to be atleast 6 characters';
        }
        if ($_POST['password'] !== $_POST['password_again']){
            $errors[] = 'Passwords does not match';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === FALSE){
            $errors[] = 'A valid email adress is required';
        }
        if (email_exists($_POST['email']) === TRUE){
            $errors [] = 'Sorry, the email \'' . ($_POST['email']) . '\' is alredy in use';
        }
    }
}

?>
	<article>
		<header>
			<h1>Register</h1>
		</header>
		<div class="reg">
<?php

if (isset($_GET['success']) && empty($_GET['success'])){
    echo'You\`ve been registered!';
    sleep(2);
    header('location: index.php');
}else{

if(empty($_POST) === FALSE && empty($errors) === TRUE){
    $register_data = array(
    'username'      => $_POST['username'],
    'password'      => $_POST['password'],
    'first_name'    => $_POST['first_name'],
    'last_name'     => $_POST['last_name'],
    'email'         => $_POST['email']
);

register_user($register_data);
header('location: register.php?success');
exit();

}else if (empty($errors) === FALSE) {
    echo output_errors($errors);
}
}

?>
		<form action="" method="post">
		    <ul>
		        <li>
		            Username*:<br>
		            <input type="text" name="username">
		        </li>
		        <li>
		           Password*:<br>
		           <input type="password" name="password">
		        </li>
		        <li>
		           Password again*:<br>
		           <input type="password" name="password_again">
		        </li>
		        <li>
		            First name*:<br>
		            <input type="text" name="first_name">
		        </li>
		        <li>
		            Last name:<br>
		            <input type="text" name="last_name">
		        </li>
		        <li>
		            Email*: <br>
		            <input type="text" name="email">
		        </li>
		        <li>
		            <input type="submit" value="Register">
		        </li>
		    </ul>
		</form>
		</div>
		</article>
	</body>
</html>
