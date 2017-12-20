<?php
$error = "error";

$con3 = mysqli_connect('localhost','root','') or die($error);
mysqli_select_db($con3, "folder") or die ("no database");   

?>

