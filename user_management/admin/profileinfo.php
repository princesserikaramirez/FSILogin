<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM admin WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>

<?php
while($row2 = mysqli_fetch_array($res2))
			{
				
				$id     		=$row2['user_id'];
				$fname			=$row2['fname'];
				$mname			=$row2['mname'];
				$lname			=$row2['lname'];
				$contact		=$row2['contact'];
				$username		=$row2['user_id'];
	echo "<p style='padding:10px; text-align:right;'><a class='btn btn-primary'  href='changeprofile.php'>Edit Profile</a> &nbsp;&nbsp;";

	echo "<a class='btn btn-primary' href='changepass.php'>Change Password</a></p>";			
	echo"	</br><p style='color:#000;'>Name</p><h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$fname." " .$mname." " .$lname."</strong></h3>";	
	echo"	</br><p style='color:#000;'>Contact</p><h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " .$contact."</strong></h3>	";
	echo"	</br><p style='color:#000;'>Username</p><h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  " .$username."</strong></h3>	";
	
			}
?>