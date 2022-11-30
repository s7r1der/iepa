<?php

$conn = newConnect();

$res = mysqli_query($conn, "select * from usuario"
	. " WHERE usr_pswd = '" . $_POST["passwd"] . "'"
	. " AND usr_name ='" . $_POST["usr"] . "'") or die(mysqli_error($conn));

if ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {

	$_SESSION["user"] = $_POST["usr"];				//Asign user name or logname.
	$_SESSION["usr_pswd"] = $_POST["passwd"];			//Asign passwd.

	$_SESSION["usr_role"] =	$row["usr_role"];	//Determine role and level, and mat  for operations and permissions.
	$_SESSION["nombre"] =	$row["usr_nombre"];
	$_SESSION["iglesia"] =	$row["usr_iglesia"];

	//echo "HOLA";
	header("Location:" . $_SERVER["PHP_SELF"] . "?event=menu_user");	//Redirect to Ppal Menu.
} else {
	//echo "CHAU".$_POST["usr"]." ".$_POST["passwd"];
	header("Location:" . $_SERVER["PHP_SELF"] . "?event=logout");		//Redirect to Login for invalid login.
}
