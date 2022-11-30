<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<FORM action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST">

	<table align=center width=60% class=myTable-gray>
		<tr valign=center>
			<td class=titulo colspan=3>CREAR REGISTRO DE ACTA</b></td>
		</tr>

		<tr>
			<td align=center colspan=3>
				<table width=100% align=center bgcolor="WHITE">

					<tr>
						<td align=center colspan=2><br></td>
					</tr>

					<tr valign=middle>
						<td align=left><B>FECHA ACTA: </td>
						<td>
							<input type="text" name="proc_date" id="datepicker" readonly="readonly" size="12" />
						</td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr valign=middle>
						<td align=left><B>TITULO </td>
						<td>
							<input type="text" name="proc_title" size="80">
						</td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr>
						<td align=left><b>DETALLE DEL ACTA: </b></td>
						<td><textarea rows=20 cols=120 name=proc_desc></textarea></td>
					</tr>

				</table>
			</td>
		</tr>

		<tr valign=top>
			<td align=center colspan=3><input type=submit class=boton id=butt_log name="event" value="Asignar Acta">
			<td>
		</tr>

	</table>

</FORM>