<link rel="StyleSheet" href="css/forms.css" type="text/css">
<meta name=viewport content="width=device-width, initial-scale=1">

<table width=90% align=center class=myTable-gray>
	<!-- <tr><td class=titulo colspan=2>RIELES ARGENTINOS<br><font size=3>MENU PRINCIPAL</font></font></td></tr>
	event=upddni  -->
	<tr><td class=titulo colspan=2><font size=6>IEPA <?php echo strtoupper($_SESSION["iglesia"]);?></font></font></td></tr>
	
	<tr><td align=left class=titulo><font size=6><?php echo $_SESSION["nombre"];?></font></td></tr>
	<tr><td><br></td></tr>
	<tr><td align=left><i><b>* 14 de Febrero</b> - Cofraternidad Jovenes IEPA SAN JUAN - Ps Carlos Balmaceda - 264........</i></td></tr>
	<tr><td align=left><i><b>* 26,27,28,29 de Febrero</b> - Congreso de Damas IEPA Tres Arroyos.</i></td></tr>
	<tr><td><br></td></tr>

	<tr><td><hR></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=nh_add_operation";?>" class=link>BALANCE - OPERACION</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_balance";?>" class=link>BALANCE - VER</a></td></tr>

	<tr><td><hR></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=nh_add_proceeding";?>" class=link>ACTAS - AGREGAR</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_proceedings";?>" class=link>ACTAS - VER</a></td></tr>

	<tr><td><hR></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=nh_add_operation";?>" class=link>NOTAS - AGREGAR</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_balance";?>" class=link>NOTAS - VER</a></td></tr>


	<tr><td><hR></td></tr>
	<tr><td align=left><a class="link" href="<?php echo $_SERVER["PHP_SELF"]."?event=show_news";?>">LIBRO MEMBRESIA - AGREGAR</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_membership";?>" class=link>LIBRO MEMBRESIA - VER</a></td></tr>

	<tr><td><hR></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_news";?>" class=link>LIBRO MATRIMONIOS - AGREGAR</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_news";?>" class=link>LIBRO MATRIMONIOS - VER</a></td></tr>

	<tr><td><hR></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_news";?>" class=link>LIBRO BAUTISMOS - AGREGAR</a></td></tr>
	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=show_news";?>" class=link>LIBRO BAUTISMOS - VER</a></td></tr>

	<tr><td><hr></td></tr>
  	<tr><td align=left><a href="<?php echo $_SERVER["PHP_SELF"]."?event=logout";?>" class=link>SALIR.</a></td></tr>

</table>
