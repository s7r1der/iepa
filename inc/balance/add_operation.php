<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<FORM action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">

<table align=center width=60% class=myTable-gray>
	<tr valign=center><td class=titulo colspan=3>CREAR REGISTRO DE UNA OPERACION</b></td></tr>	

	<tr><td align=center colspan=3>
		<table width=100% align=center bgcolor="WHITE">

			<tr><td align=center colspan=2><br></td></tr>	

			<tr valign=middle><td align=left><B>FECHA OPERACION: </td><td> 	       		
				<input type="text" name="op_date" id="datepicker" readonly="readonly" size="12" /></td></tr>

			<tr><td align=center colspan=2><hr></td></tr>	

			<tr><td align=left><B>TIPO DE OPERACION : </td><td>
				<select name=op_type class=Fields>
					<option selected>GASTOS</option>
					<option>INGRESO</option>
				</select>	       	
			</td></tr>

			<tr valign=middle><td align=left><B>IMPORTE: </td><td> 	       		
				<input type="text" name="op_val" size="12" /></td></tr>

			<tr><td align=center colspan=2><hr></td></tr>	
	
			<tr><td align=left><B>CLASE OPERACION: </td><td> 
				<select name=op_class>
					<?php 
					$conn=newConnect();
					$res=mysqli_query($conn,"SELECT op_name from type_operation where 1 order by op_name") or die(mysqli_error($conn));
					while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
						echo "<option>".$row["op_name"]."</option>";
					}echo "<option selected>-</option>"
					?>
				</select>	       		
			</td></tr>
			
			<tr><td align=left><b>DETALLE DE LA OPERACION: </b></td><td><textarea rows=5 cols=80 name=op_desc></textarea></td></tr>

		</table>
	</td></tr>
	
	<tr valign=top><td align=center colspan=3><input type=submit class=boton id=butt_log name="event" value="Asignar Operacion"><td></tr>	

</table>

</FORM>
	