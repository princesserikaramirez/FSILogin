<?php
session_start();
if(!isset($_SESSION["user_id"])){
	   session_start(); 
header("Location: login.php");
exit(); }
?>
