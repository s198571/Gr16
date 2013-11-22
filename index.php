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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="script.js"></script>
		<script src="easter.js"></script>
	</head>
	<body>
		<nav id="logg">
			<ul>
				<li><a href="register.php">Register</a></li>


				<?php
					include 'init.php';
					if(logged_in2() === FALSE){
						echo '<li><a href="LogIn2.php">Log in</a></li>';
					}
					else{
						echo '<li><a href="loggout.php">Log out</a></li>';
						echo '<li style="font-size:1.2em;"> Welcome '.$_SESSION['id'].'! </li>';
					}
				?>
			</ul>
		</nav>
		<article>
			<div id="mainCon">
				<header>
					<h1>The Dark Times</h1>
				</header>
				<nav class="navS">
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
								case 2: include "extras/characters.php";
									break;
								case 3: include "extras/ins_challenger.php";
									break;
								case 4: include "extras/acclamator3.php";
									break;
								case 5: include "protect.php";
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
				<nav class="navS">
					<ul>
						<li class="button" onclick="button()">Ext.links</li>
						<li class="hide"><a class="navA" href="http://www.fanfiction.net/~tscorpio1701" target="_blank">FF.net</a></li>
						<li class="hide"><a class="navA" href="http://forums.spacebattles.com/forums/creative-writing.18/" target="_blank">SB.com forums</a></li>
						<li class="hide"><a class="navA" href="http://starwars.wikia.com/wiki/Main_Page" target="_blank">Wookie- epedia info side</a></li>
						<li class="button" onclick="ccButton()">Df.style</li>
						<li class="style"><a id="style1" href="javascript: document.cookie='style=2 '; window.location.reload();">Style1</a></li>
						<li class="style"><a id="style2" href="javascript: document.cookie='style=3 '; window.location.reload();">Style2</a></li>
						<li class="style"><a id="style3" href="javascript: document.cookie='style=4 '; window.location.reload();">Style3</a></li>
						<li class="style"><a id="style4" href="javascript: document.cookie='style='; window.location.reload();">Style4</a></li>
					</ul>
				</nav>
				<footer>
					<address>
					Made by: Gr16 HIOA Autumn 2013
					</address>
					<div class="floatR">
						<a class="link" href="index.php?appendix=1">Credits</a>
					</div>
				</footer>
			</div>
		</article>
	</body>
</html>