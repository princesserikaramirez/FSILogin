<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM admin WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>
<?php

include('inc/db4.php');

if (isset($_GET['dow'])) {
	
	$path = $_GET['dow'];
	
	$res = mysqli_query($con,"SELECT * FROM documents WHERE path='$path'");
	$row5 = mysqli_fetch_array($res);
	$name			=$row5['fileName'];
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
	
		while($row2 = mysqli_fetch_array($res2))
		{
				$user_id  =$row2['user_id'];
	$query = "
			INSERT INTO logs 
			(user_id,fileName,date,process) 
			VALUES 
			('$user_id','$name',now(),'download');";
			mysqli_multi_query($con, $query);
		}
}

?>