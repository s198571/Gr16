<?php
if(!isset($_SESSION))
{
	session_start() ;
}


//error_reporting(0);

require_once 'connect.php';
require_once 'general.php';
require_once 'users.php';

$errors = array();
?>
