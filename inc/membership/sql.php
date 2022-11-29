<?php
if($table=="add_proc"){

	$fec=explode("/",$_POST["proc_date"]);	
	//$date=$tmp[2]."-".$tmp[1]."-".$tmp[0];

	$conn=newConnect();
	mysqli_query($conn,"insert into proceedings (proc_desc,proc_title,proc_date,usr_id,date_sys)"
				." values("
					."'".$_POST["proc_desc"]."',"
					."'".$_POST["proc_title"]."',"
					."'".$fec[2]."-".$fec[1]."-".$fec[0]."',"
					."'".$_SESSION["user"]."',"				
					."'".date("Y-m-d H:i:s")."')")or die(mysqli_error($conn));

}elseif($table=="upd_op"){

	$fec=explode("/",$_POST["op_date"]);

	$conn=newConnect();

	mysqli_query($conn,"update operation"
				." SET "
					."op_desc='".$_POST["op_desc"]."',"
					."op_type='".$_POST["op_type"]."',"
					."op_class='".$_POST["op_class"]."',"
					."op_val='".$_POST["op_val"]."',"
					."op_date='".$fec[2]."-".$fec[1]."-".$fec[0]."',"
					."usr_id='".$_SESSION["user"]."',"				
					."date_sys='".date("Y-m-d H:i:s")."' where op_id='".$_POST["op_id"]."'")or die(mysqli_error($conn));

}elseif($table=="del_op"){
	
	$conn=newConnect();
	mysqli_query($conn,"DELETE FROM operation where op_id='".$_POST["op_id"]."'")or die(mysql_error($conn));
}

?>

