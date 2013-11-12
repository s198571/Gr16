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
						<li><a class="navA" href="index.php">Home</a></li>
						<li id="button" class="navA" onclick="chButton()">Chapter</li>
						<li class="chHide"><a class="navA" href="index.php?page=1">Ch.1</a></li>
						<li class="chHide"><a class="navA" href="#3">Ch.2</a></li>
						<li class="chHide"><a class="navA" href="#4">Ch.3</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.4</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.5</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.6</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.7</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.8</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.9</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.10</a></li>
						<li class="chHide"><a class="navA" href="#5">Ch.11</a></li>
					</ul>
				</nav>
				<?php
					if(empty($_GET))
						include 'frontPage.html';
					else
					{
						switch($_GET["page"])
						{
						    case 1: include 'chapter-1/ch1p1.html';
							        break;
						    case 2: include 'chapter-1/ch1p2.html';
									break;
							case 3: include 'chapter-1/ch1p3.html';
							        break;
							case 4: include 'chapter-1/ch1p4.html';
									break;
							default: include 'frontPage.html';
						}
					}
				?>
				<nav id="navR">
					<ul>
						<li id="button" class="navA" onclick="button()">Ext.links</li>
						<li class="hide"><a class="navA" href="http://www.fanfiction.net/~tscorpio1701" target="_blank">FF.net</a></li>
						<li class="hide"><a class="navA" href="http://forums.spacebattles.com/forums/creative-writing.18/" target="_blank">SB.com forums</a></li>
						<li class="hide"><a class="navA" href="http://starwars.wikia.com/wiki/Main_Page" target="_blank">Wookie- epedia info side</a></li>
					</ul>
				</nav>
				<footer>
					<p>Deltagare:</p>
					<div><a class="foo"><a href="index.php?page="></a></div>
				</footer>
			</div>
		</article>
	</body>
</html>