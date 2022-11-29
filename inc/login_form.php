<link rel="StyleSheet" href="css/login_form.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">


<FORM action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">


<table align=center height=20% class=myTable-gray>
	<tr valign=center><td colspan=2 align=center><img src="inc/logo.png" width=50%><br><FONT COLOR=white size=5><b>IEPA ZONA CUYO</b></FONT><<td></tr>	
	<tr><td><br></td></tr>
	<tr valign=bottom>	<td align=center><b>USUARIO:</b></td></tr>	
	<tr>				<td align=center><input type=text class=Fields size=20 name=usr id=usr_id></td></tr>
	<tr>				<td align=center><b>CONTRASE&NtildeA:</b></td></tr>
	<tr>					<td align=center><input type=password class=Fields size=20 name=passwd></td></tr>

	<tr valign=top><td align=center colspan=2><input type=submit class=boton id=butt_log name="event" value="Acceder"><td></tr>	
</table>

</FORM>
	