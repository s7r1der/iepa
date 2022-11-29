 <?php
if(isset($_GET["event"])){
	if(substr($_GET["event"],0,3)!="nh_"){	
		include("inc/header.php");
	}
																					  
	$_SESSION["pos"]=$_GET["event"];
//GET-->
	switch($_GET["event"]){

	//GRAL. Functions
		case "menu_user":
			include("inc/menu_user.php");	
			break;

		case "add_user":
			include("inc/user/add_user.php");
			break;

		case "show_user":
			include("inc/user/show_user.php");
			break;


		case "show_news":
			echo "HOLA";

			$para      = 'dcristian01@gmail.com';
			$titulo    = 'El título';
			$mensaje   = 'Hola';
			$cabeceras = 'From: webmaster@example.com' . "\r\n" .
			    'Reply-To: webmaster@example.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

            echo mail($para, $titulo, $mensaje, $cabeceras)?"Enviado.\n":"Lo sentimos, no se pudo enviar.\n";
			//mail($para, $titulo, $mensaje, $cabeceras);


			//include("inc/user/show_user.php");
			break;



		case "nh_add_operation":
			include("inc/header1.php");
			include("inc/balance/add_operation.php");
			break;

		case "nh_upd_operation":
			include("inc/header1.php");
			include("inc/balance/upd_operation.php");
			break;

		case "del_operation":
			//include("inc/header1.php");
			include("inc/balance/del_operation.php");
			break;


		case "show_balance":
			include("inc/balance/show_balance.php");
			break;

		case "show_proceedings":
			include("inc/proceedings/show_proceedings.php");
			break;			

		case "nh_add_proceeding":
			include("inc/header1.php");
			include("inc/proceedings/add_proceeding.php");
			break;

		case "show_membership":
			include("inc/membership/show_membership.php");
			break;



		case "logout": 	
			if(session_id()){
			//mysql_delete("log2","usr_mat='".$_SESSION["usr_mat"]."'");
				session_unset();
				session_destroy();
			}
			include("inc/login_form.php");
			//login_form();
			break;

	}if(substr($_GET["event"],0,3)!="nh_")include("inc/footer.php");



//POST-->
}elseif(isset($_POST["event"])){
	//if($_POST["event"]<>"VerHC" && $_POST["event"]<>"VerDHC" 
	if($_POST["event"]=="Asignar Operacion") include("inc/header.php");

	switch($_POST["event"]){

		case "CANCELAR":
			header("Location:".$_SERVER["PHP_SELF"]."?event=menu_user");	
			break;

		case "Agregar Usuario":
			
			$res=mysql_query("SELECT usr_name FROM usuario WHERE usr_name='".$_POST["usr_name"]."' and usr_pswd='".$_POST["usr_pswd"]."'")or die(mysql_error());

			if(mysql_num_rows($res)){
				echo "<font size=6 color=white>YA EXISTE UN USUARIO CON ESTAS CARACTERISTICAS</font>";
			}
			else{
				$table="add";
				include("inc/user/sql.php");
				header("Location:".$_SERVER["PHP_SELF"]."?event=menu_user");     
			}
			break;

		//OPERATIONS FUNCTIONS
		case "Asignar Operacion":

			include("inc/balance/pre_assign_op.php");	
			break;

		case "INGRESAR OPERACION":
			
			$table="add_op";
			include("inc/balance/sql.php");

			header("Location:".$_SERVER["PHP_SELF"]."?event=menu_user");	
			break;

		case "BORRAR OPERACION":
			
			$table="del_op";
			include("inc/balance/sql.php");

			header("Location:".$_SERVER["PHP_SELF"]."?event=show_balance");	
			break;


		case "Guardar Operacion":
			
			$table="upd_op";
			include("inc/balance/sql.php");
			header("Location:".$_SERVER["PHP_SELF"]."?event=show_balance");	
			break;
		//OPERATIONS FUNCTIONS END

		//PROCEEDINGS FUNCTIONS END
		case "Asignar Acta":

			include("inc/proceedings/pre_assign_proc.php");	
			break;

		case "INGRESAR ACTA":
			
			$table="add_proc";
			include("inc/proceedings/sql.php");

			header("Location:".$_SERVER["PHP_SELF"]."?event=menu_user");	
			break;



	}if(substr($_POST["event"],0,3)!="nh_")include("inc/footer.php");
}
?>
