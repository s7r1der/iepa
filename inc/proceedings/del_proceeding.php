<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<FORM action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST">

	<?php


	$conn = newConnect();

	$res = mysqli_query($conn, "select * from operation where op_id='" . $_GET["op_id"] . "'") or die(mysqli_error($conn));

	while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {

		$tmp = explode("-", $row["op_date"]);

		$_POST["op_date"] = $tmp[2] . "/" . $tmp[1] . "/" . $tmp[0];

		$_POST["op_type"] = $row["op_type"];
		$_POST["op_class"] = $row["op_class"];
		$_POST["op_desc"] = $row["op_desc"];
		$_POST["op_val"] = $row["op_val"];
	}

	?>

	<input type="hidden" name=op_date value=<?php echo $_POST["op_date"]; ?>>
	<input type="hidden" name=op_type value=<?php echo $_POST["op_type"]; ?>>
	<input type="hidden" name=op_val value=<?php echo $_POST["op_val"]; ?>>
	<input type="hidden" name=op_desc value="<?php echo $_POST["op_desc"]; ?>">
	<input type="hidden" name=op_class value=<?php echo $_POST["op_class"]; ?>>
	<input type="hidden" name=op_id value=<?php echo $_GET["op_id"]; ?>>


	<table align=center width=60% class=myTable-gray>
		<tr valign=center>
			<td class=titulo colspan=3>DESEA BORRAR ESTA OPERACION</b></td>
		</tr>

		<tr>
			<td align=center colspan=3>
				<table width=100% align=center bgcolor="WHITE">

					<tr>
						<td align=center colspan=2><br></td>
					</tr>

					<tr valign=middle>
						<td align=left><B>FECHA OPERACION: </td>
						<td><?php echo $_POST["op_date"]; ?></td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr>
						<td align=left><B>TIPO DE OPERACION : </td>
						<td>

							<?php echo "<b><font size=6 color=" . ($_POST["op_type"] == "INGRESO" ? "GREEN" : "RED") . ">" . $_POST["op_type"] . "</font></b>"; ?>

						</td>
					</tr>


					<tr>
						<td align=left><B>IMPORTE : </td>
						<td>

							<?php echo "<b><font size=6 color=" . ($_POST["op_type"] == "INGRESO" ? "GREEN" : "RED") . ">$" . $_POST["op_val"] . "</font></b>"; ?>

						</td>
					</tr>

					<tr>
						<td align=center colspan=2>
							<hr>
						</td>
					</tr>

					<tr>
						<td align=left><B>CLASE OPERACION: </td>
						<td><?php echo $_POST["op_class"]; ?></td>
					</tr>
					<!--<tr><td align=center colspan=2><hr></td></tr>-->

					<tr>
						<td align=left><b>DETALLE DE LA OPERACION: </b></td>
						<td><?php echo $_POST["op_desc"]; ?></td>
					</tr>

					<!--<tr><td align=center colspan=2><hr></td></tr>-->

				</table>
			</td>
		</tr>

		<tr valign=top>
			<td align=center colspan=2>
				<input type=submit class=boton id=butt_log name="event" value="BORRAR OPERACION">
				<input type=submit class=boton id=butt_log name="event" value="CANCELAR">
			<td>
		</tr>

	</table>

</FORM>