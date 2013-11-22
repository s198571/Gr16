<?php
function register_user($register_data){



    array_walk($register_data, 'array_sanitize');
    $register_data['password'] = md5($register_data['password']);

    $fields = '`' . implode('`, `', array_keys($register_data)) . '`';
    $data = '\'' . implode('\',\'', $register_data) .'\'';


    mysql_query("INSERT INTO `brukere`($fields) VALUES ($data)");

}

function logged_in(){
    return (isset($_SESSION['id'])) ? TRUE : FALSE;
}

function logged_in2(){
 	return (isset($_SESSION['id'])) ? TRUE : FALSE;
}

function user_exists($username){
    $username = sanitize($username);
    return (mysql_result(mysql_query("SELECT COUNT('id') FROM `brukere` WHERE `username` = '$username'"), 0) == 1) ? TRUE : FALSE;
}

function email_exists($email){
    $email = sanitize($email);
    return (mysql_result(mysql_query("SELECT COUNT('id') FROM `brukere` WHERE `email` = '$email'"), 0) == 1) ? TRUE : FALSE;
}

function user_id_from_username($username){
    $username = sanitize($username);
    return mysql_result(mysql_query("SELECT `id` FROM `brukere` WHERE `username` ='$username'"), 0, 'id');
}

function login($username, $password){
    user_id_from_username($username);

    $username = sanitize($username);
    $password = md5($password);

    return(mysql_result(mysql_query("SELECT COUNT(`id`) FROM `brukere` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $id : FALSE;
}
?>
