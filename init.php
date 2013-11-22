<?php

if(!isset($_SESSION))
{
	session_start();
}
//error_reporting(0);

require 'connect.php';
require 'general.php';
require 'users.php';

$errors = array();
?>
