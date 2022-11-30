<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<?php

$conn = newConnect();

$res = mysqli_query($conn, "select * from membership where mem_owner='" . $_SESSION["iglesia"] . "'") or die(mysqli_error($conn));

echo "<table align=center width=100% bgcolor=white>";
echo "<tr valign=center>";
echo "<td class=titulo colspan=5>LIBRO DE MEMBRESIA DE " . $_SESSION["iglesia"] . "</b></td>";
echo "<td align=center class=titulo>"
	. "<a href=" . $_SERVER["PHP_SELF"] . "?event=menu_user class=myButton>SALIR</a>";
echo "</td>";

echo "</tr>";

echo "<tr>";
echo "<td class=subtitulo>Nro</td>";
echo "<td class=subtitulo>NOMBRE</td>";
echo "<td class=subtitulo>DOMICILIO</td>";
echo "<td class=subtitulo>DNI</td>";
echo "<td class=subtitulo>CARGO</td>";
echo "<td class=subtitulo>OPERACION</td>";
echo "</tr>";

$cont = 1;

while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {

	echo "<tr>";

	echo "<td align=center>" . $cont . "</td>";
	echo "<td align=center><b><font size=4 color=black>" . $row["mem_nombre"] . "</font></b></td>";
	echo "<td align=center><b><font size=4 color=black>" . $row["mem_domicilio"] . "</font></b></td>";
	echo "<td align=center><b><font size=4 color=black>" . $row["mem_dni"] . "</font></b></td>";
	echo "<td align=center><b><font size=4 color=black>" . $row["mem_class"] . "</font></b></td>";

	echo "<td align=center>"
		. "<a href=" . $_SERVER["PHP_SELF"] . "?event=nh_upd_operation&op_id=" . $row["op_id"] . " class=myButton>VER</a> - "
		. "<a href=" . $_SERVER["PHP_SELF"] . "?event=nh_upd_operation&op_id=" . $row["op_id"] . " class=myButton>CAMBIAR</a> - "
		. "<a href=" . $_SERVER["PHP_SELF"] . "?event=del_operation&op_id=" . $row["op_id"] . " class=myButton>BORRAR</a>";
	echo "</td>";

	echo "</tr>";

	echo "<tr><td colspan=6><hr></td></tr>";

	$cont = $cont + 1;
}

?>