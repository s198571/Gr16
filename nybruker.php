
<?php
require("connect.php");
	
	$nybruker = "";
	$finnes = 0;
	if (isset($_POST['brukernavn'])){
		$brukernavn=$_POST['brukernavn'];
		$passord=md5($_POST['passord']);
                $email = $_POST['email'];
		
					$sql="SELECT * FROM brukere WHERE username='$brukernavn'"; 
                    $result=mysql_query($sql);
					
                    while ($row=mysql_fetch_array($result)) {
							$finnes++;
						}
		if($finnes==0){
			mysql_query("INSERT INTO brukere (username, password, email) VALUES ('$brukernavn', '$passord', '$email')") or die ("error");
			$nybruker = "Bruker er n?? lagt til!";
		}else{
			$nybruker = "Brukernavnet finnes fra f??r..";	
		}
	
	die('Du m? v?re innlogget..');	

}
?>
<section id='nyNyhet'>
	<h2 class='nyhet'>Legg til ny bruker</h2>
	<form enctype="multipart/form-data" action='nybruker.php' method='POST'>
	<table border='0' id='tblnyNyhet'>
		
		<tr>
			<td colspan="2">
				Brukernavn:<input type='text' name='brukernavn' id='tittel' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Passord:<input type='password' name='passord' id='tittel' />
			</td>
		</tr>
                <tr>
			<td colspan="2">
				Email:<input type='text' name='email' id='tittel' />
			</td>
		</tr>
		<tr>
			<td>
				<a href='index.php'>Avbryt</a>
			</td>
            <td align="right">
            	<input type='submit' value='Legg inn!' />
            </td>
		</tr>
	</table>
</form>
</section>