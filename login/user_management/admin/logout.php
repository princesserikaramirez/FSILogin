<?php include 'header.php'; ?>
<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["user_id"]);
header("Location: ../../login.php");

?>
<?php include 'footer.php'; ?>
