
<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>
<form action="user_changepass.php" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
		
			
			</br>
			<label><b>Old Password</label></b>
			<input type="password" name="opass"></br>
			</br><label><b>New Password</label></b>
			<input type="password" name="npass"></br>
			</br><label><b>Confirm Password</label></b>
			<input type="password" name="cpass"></br>
		
			<?php
// If the values are posted, insert them into the database.
while($row2 = mysqli_fetch_array($res2))
		{
	if (isset($_POST['submit'])){
	$password  =$row2['user_passwd'];
	$opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
   

    if($password != $opass){
        echo 'Wrong old password';
    }
    else{
		if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $npass)) {
    echo 'the password does not meet the requirements!';
		}
		else{
          if($npass != $cpass){
             echo 'Password doesnt match';
			}
			else{
				$query = "UPDATE user SET user_passwd ='$npass'";
			mysqli_multi_query($con2, $query);
			
			$user_id  =$row2['user_id'];
		include('inc/db.php');	
	$query2 = "INSERT INTO logs 
			(user_id,fileName,date,process) 
			VALUES 
			('$user_id','',now(),'Change password');";
			mysqli_multi_query($con, $query2);
	
			
			}
          }
	}
	}
   }
?>
			
	</br>
<div align="right">		
			<input type="submit" class='btn btn-primary' name="submit" value="CONFIRM" style="margin-bottom:10px; margin-right:10px">
			<input type="button" class='btn btn-primary' name="cancel" value=" CANCEL" style="margin-bottom:10px"/>    
			</div>
	
		</form>