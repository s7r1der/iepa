<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<?php

$conn=newConnect();

$res=mysqli_query($conn,"select * from operation where op_owner='".$_SESSION["iglesia"]."'")or die(mysqli_error($conn));

echo "<table align=center width=60% bgcolor=white>";
	echo "<tr valign=center>";
		echo "<td class=titulo colspan=8>BALANCE IGLESIA ".$_SESSION["iglesia"]."</b></td>";
		echo "<td align=center class=titulo>"
			."<a href=".$_SERVER["PHP_SELF"]."?event=menu_user class=myButton>SALIR</a>";
		echo "</td>";

	echo "</tr>";

	echo "<tr>";
		echo "<td class=subtitulo>Nro</td>";
		echo "<td class=subtitulo>FECHA</td>";
		echo "<td class=subtitulo>TIPO</td>";
		echo "<td class=subtitulo>CLASE</td>";
		echo "<td class=subtitulo>DETALLE</td>";
		echo "<td class=subtitulo>INGRESO</td>";
		echo "<td class=subtitulo>EGRESO</td>";
		echo "<td class=subtitulo>SALDO</td>";
		echo "<td class=subtitulo>OPERACION</td>";
	echo "</tr>";

$tot_egr=$tot_ing=0;
$cont=1;
					
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){

	$tmp=explode("-",$row["op_date"]);
	$date=$tmp[2]."/".$tmp[1]."/".$tmp[0];

	echo "<tr>";

		echo "<td align=center>".$cont."</td>";
		echo "<td align=center>".$date."</td>";
		echo "<td align=center><b><font size=4 color=".($row["op_type"]=="INGRESO"?"GREEN":"RED").">".$row["op_type"]."</font></b></td>";
		echo "<td align=center>".$row["op_class"]."</td>";
		echo "<td>".$row["op_desc"]."</td>";

		if ($row["op_type"]=="INGRESO"){

			echo "<td align=center><b>".$row["op_val"]."</b></td><td align=center>-</td>";
			$tot_ing=$tot_ing+$row["op_val"];

		}else{

			echo "<td align=center>-</td><td align=center><b>-".$row["op_val"]."</b></td>";
			$tot_egr=$tot_egr+$row["op_val"];

		}

		echo "<td align=center><b><font size=4 color=".(($tot_ing-$tot_egr)>0?"GREEN":"RED").">".($tot_ing-$tot_egr)."</font></b></td>";

		echo "<td align=center>"
			."<a href=".$_SERVER["PHP_SELF"]."?event=nh_upd_operation&op_id=".$row["op_id"]." class=myButton>CAMBIAR</a> - "
			."<a href=".$_SERVER["PHP_SELF"]."?event=del_operation&op_id=".$row["op_id"]." class=myButton>BORRAR</a>";
		echo "</td>";

	echo "</tr>";

	echo "<tr><td colspan=8><hr></td></tr>";

	$cont=$cont+1;
}

	echo "<tr>";
		echo "<td colspan=5></td>";
		echo "<td align=center><b><font size=4 color=GREEN>".$tot_ing."</font></b></td>";
		echo "<td align=center><b><font size=4 color=RED>".$tot_egr."</font></b></td>";
		echo "<td align=center><b><font size=4 color=BLACK>".($tot_ing-$tot_egr)."</font></b></td>";
	echo "</tr>";


?>
