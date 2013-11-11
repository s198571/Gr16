<!DOCTYPE html>
<html>
	<head>
		<link>
		<meta charset="UTF-8">
		<title>The Dark Times</title>
		<link rel="shortcut icon" href="pictures/ship.ico" type="image/x-icon">
		<link rel="stylesheet" title="Orginal" href="stylesheet.css">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="script.js"></script>
		<script src="easter.js"></script>

	</head>
	<body>
		<article>
		<div id="mainCon">
			<header>
				<h1>The Dark Times</h1>
			</header>

				<nav>
					<ul>
						<li><a class="navA" href="index.php?page=1">Home</a></li>
						<li><a class="navA" href="index.php?page=2">Chapter 1</a></li>
						<li><a class="navA" href="#3">3</a></li>
						<li><a class="navA" href="#4">4</a></li>
						<li><a class="navA" href="#5">5</a></li>
					</ul>
				</nav>
				<?php
					if(empty($_GET))
						include 'frontPage.html';
					else
					{
						switch($_GET["page"])
						{
						    case 1: include 'frontPage.html';
							    	break;
						    case 2: include 'chapter-1/ch1p1.html';
							        break;
						    case 3: include 'chapter-1/ch1p2.html';
									break;
							case 4: include 'chapter-1/ch1p3.html';
							        break;
							case 5: include 'chapter-1/ch1p4.html';
									break;
							default: include 'frontPage.html';
						}
					}
				?>
				<nav id="navR">
					<ul>
						<li><a class="navA" href="#1">1</a></li>
						<li><a class="navA" href="#1">1</a></li>
						<li><a class="navA" href="#1">1</a></li>
						<li><a class="navA" href="#1">1</a></li>
						<li><a class="navA" href="#1">1</a></li>
					</ul>
				</nav>
				<footer>
					<p>Deltagare:</p>
				</footer>
			</div>
		</article>
	</body>
</html>