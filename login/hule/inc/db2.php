<?php
$error = "error";

$con2 = mysqli_connect('localhost','root','') or die($error);
mysqli_select_db($con2, "dms-fsi") or die ("no database");   

?>