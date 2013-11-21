<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" title="Default" href="Style.css">
</html>

<?php
require("connect.php");
session_start();
if(isset($_SESSION['brukernavn'])){
    echo $_SESSION['brukernavn'];
}
if(isset($_GET['ut'])){
	if($_GET['ut']=="ja"){
		session_destroy();
		header("Location: index.php");
	}
}
$feilpassord = 0;
if(isset($_POST['logginn'])){
	$brukernavn = $_POST['brukernavn'];
	$passord = md5($_POST['passord']);
	$brukernavn = mysql_real_escape_string($brukernavn);
	$query = mysql_query("SELECT * FROM brukere WHERE username='$brukernavn'");
            
            $numrows = mysql_num_rows($query);
            $dbusername = "";
            while ($row = mysql_fetch_assoc($query)){
                $dbusername = $row ['username'];
                $dbpassword = $row ['password'];
                
            }
			if ($brukernavn==$dbusername&&$dbpassword==$passord){
				$_SESSION['brukernavn'] = $brukernavn;
				header("Location: logginn.php");
			}else{
				$feilpassord = 1;
			}
}

?>
<!--gammel
<form action='logginn.php' method='POST'>
	<input type='hidden' value='logginn' name='logginn' />
    Brukernavn:<input type='text' name='brukernavn' /><br />
    Passord:<input type='password' name='passord' /><br />
    <input type='submit' value='Logg inn!' />
</form>
-->
<section id='logginn'>
	<h2 class='nyhet'>Logg inn</h2>
	<form action='logginn.php' method='POST'>
	<input type='hidden' value='logginn' name='logginn' />
	<table border='0' id='tblLoggInn'>
		<tr>
			<td>
				Brukernavn:
			</td>
			<td>
				<input type='text' name='brukernavn' class='tekstfelt' />
			</td>
		</tr>
		<tr>
			<td>
				Passord:
			</td>
			<td>
				<input type='password' name='passord' class='tekstfelt' />
			</td>
		</tr>
        
		<tr>
			<td>
				<a href='index.php'>Avbryt</a>
			</td>
			<td align='right'>
				<input type='submit' value='Logg inn!' />
			</td>
		</tr>
        <!--sjekker om feil passord-->

	</table>
</form>
</section>