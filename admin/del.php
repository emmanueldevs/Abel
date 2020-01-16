<?php
ob_start();
include ('../includes/db.php');

	$id =$_REQUEST['id'];
	
	mysqli_query($conDB, "DELETE FROM sm_shorturl WHERE id = '$id'")
	or die('Error: Could not connect to MySQL database.'); 	
	
	header("Location: links.php");
ob_flush();
?>