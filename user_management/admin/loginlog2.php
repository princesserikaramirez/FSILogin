<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>


<?php
	
			while($row2 = mysqli_fetch_array($res2))
		{
			$user_id  =$row2['user_id'];
		include('inc/db.php');	
	$query = "
			INSERT INTO logs 
			(user_id,fileName,date,process) 
			VALUES 
			('$user_id','',now(),'login');";
			mysqli_multi_query($con, $query);
			header('Location:user_home.php?page=1');
	}
			
?>

	