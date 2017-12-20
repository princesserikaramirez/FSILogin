<?php
$error = "error";

$con10 = mysqli_connect('localhost','root','') or die($error);
mysqli_select_db($con10, "dms-fsi") or die ("no database");   

?>