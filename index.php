<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Star Wars</title>
		<link rel="stylesheet" title="Orginal" href="stylesheet.css">
		<link rel="shortcut icon" href="ship.ico" type="image/x-icon">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</head>
	<body>
		<article>
			<header>
				<h1>Logo</h1>
			</header>
			<nav id="navL">
				<ul>
					<li><a href="index.php?page=1">Chapter 1</a></li>
					<li><a href="#2">2</a></li>
					<li><a href="#3">3</a></li>
					<li><a href="#4">4</a></li>
					<li><a href="#5">5</a></li>
				</ul>
			</nav>
			<nav id="navR">
				<ul>
					<li><a href="#1">1</a></li>
					<li><a href="#2">2</a></li>
					<li><a href="#3">3</a></li>
					<li><a href="#4">4</a></li>
					<li><a href="#5">5</a></li>
				</ul>
			</nav>
			<?php
				if(empty($_GET))
					include 'frontPage.html';
				switch($_GET["page"])
				{
				    case 1: include 'c1p1.html';
					    	break;
				    case 2: include 'c1p2.html';
					        break;
				    case 3: include 'c1p3.html';
							break;
					case 4: include 'c1p4.html';
					        break;
				}
			?>
			<footer>
				<p>Deltagare:</p>
			</footer>
		</article>
	</body>
</html>
