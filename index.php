<!DOCTYPE html>
<html>
	<head>
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
				<nav id="logg">
				<ul>
					<li><a href="prooisg.sfiph">Reg</a></li>
					<li><a href="pajegh.ølgk">Logg in</a></li>
					<li><a href="pjsgag.pog">Logg ut</a></li>

				<ul>
				</nav>
				<header>
					<h1>The Dark Times</h1>
				</header>

				<nav>
					<ul>
						<li><a class="navA" href="index.php">Home</a></li>

						<li class="button" onclick="chButton()">Chapter</li>
						<li class="chHide"><a class="navA" href="index.php?chapter=1">Ch.1</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=2">Ch.2</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=3">Ch.3</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=4">Ch.4</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=5">Ch.5</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=6">Ch.6</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=7">Ch.7</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=8">Ch.8</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=9">Ch.9</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=10">Ch.10</a></li>
						<li class="chHide"><a class="navA" href="index.php?chapter=11">Ch.11</a></li>

						<li class="button" onclick="exButton()">Ext.mat</li>
						<li class="exHide"><a class="navA" href="index.php?appendix=2">Characters</a></li>
						<li class="exHide"><a class="navA" href="index.php?appendix=3">INS Challenger</a></li>
						<li class="exHide"><a class="navA" href="index.php?appendix=4">Acclamator 3</a></li>

					</ul>
				</nav>
				<?php

					$kap = glob("c*",GLOB_ONLYDIR);

					if(empty($_GET))
						include 'frontPage.html';

					else if(!(empty($_GET["appendix"])))
					{
						if($_GET["appendix"])
						{
							switch($_GET["appendix"]):

								case 1: include "credits.html";
									break;
								case 2: include "extras/characters.html";
									break;
								case 3: include "extras/ins_challenger.html";
									break;
								case 4: include "extras/acclamator3.html";
									break;
								default: include "frontPage.html";
							endswitch;
						}
					}
					else if(empty($_GET["chapter"]))
						include 'frontPage.html';

					else if($_GET["chapter"] > count($kap))
						include 'frontPage.html';

					else
					{
						$side = glob($kap[$_GET["chapter"]-1]."/*.html");
						$max = count($side);

						if(empty($_GET["page"]))
							include $side[0];

						else if($_GET["page"] > $max)
							include $side[count($side)-1];

						else
							include $side[$_GET["page"]-1];
						echo "<script>
								var antall;
								$(document).ready(function antallSider() {
									antall = $max;
									console.log('antall:'+antall);
									make_buttons(); });
							  </script>";
					}

				?>
				<nav id="navR">
					<ul>
						<li class="button" onclick="button()">Ext.links</li>
						<li class="hide"><a class="navA" href="http://www.fanfiction.net/~tscorpio1701" target="_blank">FF.net</a></li>
						<li class="hide"><a class="navA" href="http://forums.spacebattles.com/forums/creative-writing.18/" target="_blank">SB.com forums</a></li>
						<li class="hide"><a class="navA" href="http://starwars.wikia.com/wiki/Main_Page" target="_blank">Wookie- epedia info side</a></li>
						<li class="button" onclick="ccButton()">Df.style</li>
						<li style="color:red; border-color:red; background-color:rgba(255,255,255,0.0);" id="style1" class="style" onclick="changeColor(style1)">Style1</li>
						<li style="color:green; border-color:green; background-color:white;" id="style2" class="style" onclick="changeColor(style2)">Style2</li>
						<li style="color:white; border-color:white; background-color:black;" id="style3" class="style" onclick="changeColor(style3)">Style3</li>
						<li style="color:gold; border-color:gold; background-color:rgba(255,255,255,0.2);" id="style4" class="style" onclick="changeColor(style4)">Style4</li>
					</ul>
				</nav>
				<footer>
					<address>
					Made by:
					</address>
					<div class="floatR">
						<a class="link" href="index.php?appendix=1">Credits</a>
					</div>
				</footer>
			</div>
		</article>
	</body>
</html>