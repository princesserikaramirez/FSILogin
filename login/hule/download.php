<?php

include('inc/db.php');

if (isset($_GET['dow'])) {
	
	$path = $_GET['dow'];
	
	$res = mysqli_query($con,"SELECT * FROM files WHERE path='$path'");
	
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Lenth: ' . filesize($path));
	readfile($path);
}

?>