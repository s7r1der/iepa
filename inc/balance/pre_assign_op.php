<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<FORM action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">

<input type="hidden" name=op_date value=<?php echo $_POST["op_date"];?>>
<input type="hidden" name=op_type value=<?php echo $_POST["op_type"];?>>
<input type="hidden" name=op_val value=<?php echo $_POST["op_val"];?>>
<input type="hidden" name=op_desc value="<?php echo $_POST["op_desc"];?>">
<input type="hidden" name=op_class value=<?php echo $_POST["op_class"];?>>


<table align=center width=60% class=myTable-gray>
	<tr valign=center><td class=titulo colspan=3>DESEA AGREGAR ESTA OPERACION</b></td></tr>	

	<tr><td align=center colspan=3>
		<table width=100% align=center bgcolor="WHITE">

			<tr><td align=center colspan=2><br></td></tr>	

			<tr valign=middle><td align=left><B>FECHA OPERACION: </td><td><?php echo $_POST["op_date"];?></td></tr>

			<tr><td align=center colspan=2><hr></td></tr>	

			<tr><td align=left><B>TIPO DE OPERACION : </td><td>

				<?php echo "<b><font size=6 color=".($_POST["op_type"]=="INGRESO"?"GREEN":"RED").">".$_POST["op_type"]."</font></b>"; ?>

			</td></tr>


			<tr><td align=left><B>IMPORTE : </td><td>

				<?php echo "<b><font size=6 color=".($_POST["op_type"]=="INGRESO"?"GREEN":"RED").">$".$_POST["op_val"]."</font></b>"; ?>
				
			</td></tr>

			<tr><td align=center colspan=2><hr></td></tr>	

			<tr><td align=left><B>CLASE OPERACION: </td><td><?php echo $_POST["op_class"];?></td></tr> 
			<!--<tr><td align=center colspan=2><hr></td></tr>-->	
			
			<tr><td align=left><b>DETALLE DE LA OPERACION: </b></td><td><?php echo $_POST["op_desc"];?></td></tr>

			<!--<tr><td align=center colspan=2><hr></td></tr>-->	

		</table>
	</td></tr>
	
	<tr valign=top><td align=center colspan=2>
		<input type=submit class=boton id=butt_log name="event" value="INGRESAR OPERACION">
		<input type=submit class=boton id=butt_log name="event" value="CANCELAR"><td></tr>	

</table>

</FORM>
	