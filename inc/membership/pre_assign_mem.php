<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<FORM action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST">

	<input type="hidden" name=proc_date value=<?php echo $_POST["proc_date"]; ?>>
	<input type="hidden" name=proc_title value="<?php echo $_POST["proc_title"]; ?>">
	<input type="hidden" name=proc_desc value="<?php echo $_POST["proc_desc"]; ?>">


	<table align=center width=60% class=myTable-gray>
		<tr valign=center>
			<td class=titulo colspan=3>DESEA AGREGAR ESTE ACTA</b></td>
		</tr>

		<tr>
			<td align=center colspan=3>
				<table width=100% align=center bgcolor="WHITE">

					<tr>
						<td align=center colspan=2><br></td>
					</tr>

					<tr valign=middle>
						<td align=left><B>FECHA ACTA: </td>
						<td><?php echo $_POST["proc_date"]; ?></td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr>
						<td align=left><B>TITULO</td>
						<td><?php echo "<b><font size=6>" . $_POST["proc_title"] . "</font></b>"; ?></td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr>
						<td align=left><b>DETALLE DEL ACTA: </b></td>
						<td><?php echo $_POST["proc_desc"]; ?></td>
					</tr>

				</table>
			</td>
		</tr>

		<tr valign=top>
			<td align=center colspan=2>
				<input type=submit class=boton id=butt_log name="event" value="INGRESAR ACTA">
				<input type=submit class=boton id=butt_log name="event" value="CANCELAR">
			<td>
		</tr>

	</table>

</FORM>