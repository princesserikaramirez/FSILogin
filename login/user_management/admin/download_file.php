<?php

include('inc/db4.php');

if (isset($_GET['dow'])) {
	
	$path = $_GET['dow'];
	
	$res = mysqli_query($con,"SELECT * FROM documents WHERE path='$path'");
	
	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Transfer-Encoding: binary');
	header('Connection: Keep-Alive');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($path));
	ob_clean();
    flush();
    readfile($path);
}

?>