 <?php
session_start();
if(!isset($_SESSION["edit_post"])){
	   
header("Location: home.php?page=1");
exit(); }
?>
