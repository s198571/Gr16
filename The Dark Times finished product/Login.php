<?php
include 'init.php';

if (empty($_POST)===FALSE){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if (empty($username) === TRUE || empty($password) === TRUE){
    
}else if (user_exists($username) === FALSE){
    $errors[] = 'Username does not exist';
}else {
    $login = ('$username $password');
    if ($login === FALSE){
        $errors[] = 'That username/password combination is incorrect';
    }else{
        $_SESSION ['id'] = $login;
        header('location: index.php');
        exit();
    }
}

print_r($errors)

?>
