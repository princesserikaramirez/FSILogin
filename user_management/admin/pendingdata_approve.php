<?php
	include('inc/db4.php');	
	
	$id = $_GET['id'];
	
	$query = "UPDATE documents SET adm_aprvl= '1'  WHERE id='$id' ";
	mysqli_query($con, $query);
	
	header('Location: pending.php');
?>