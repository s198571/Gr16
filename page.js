<?php
$page = $_GET['page'];
$pages = array( '1', '2', '3' );
if (!empty($page))
{
	if(in_array($page,$pages))
	{
		$page .= '.php'; include($page);
	}
	else
	{
		print 'Error 404! Page not found. Return to <a href="index.php">index</a>';
	}
	}
	else
	{
		include('hjem.html');
	}
?>
