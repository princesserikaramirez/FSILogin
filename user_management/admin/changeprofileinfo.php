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
				$email			=$row2['email'];
				$contact		=$row2['contact'];
				$username		=$row2['user_id'];
				$ques			=$row2['sec_que'];
				$ans			=$row2['secq'];
				echo "<p style='padding:10px; text-align:right;'>";
echo "<a class='btn btn-primary' href='changepass.php'>Change Password</a></p>";	
	echo "<form action='changeprofileinfo.php' method='post'>
		<input type='hidden' name='cusername' value='".$id."'>
		Username: <input type='text' name='username' value='".$id."'><br>
		First Name: <input type='text' name='firstname' value='".$fname."'><br>
		Middle Name: <input type='text' name='midname' value='".$mname."'><br>
		Last Name: <input type='text' name='lastname' value='".$lname."'><br>
		E-mail: <input type='text' name='cemail' value='".$email."'><br>
		Contact Number: <input type='text' name='ccontact' value='".$contact."'><br>
		<select name='ques' onchange='getmodel();'>
		<option value='What is your sport'>What is your sport</option>
		<option value='Who is your mother'>Who is your mother</option>
		<option value='When is your birthday'>When is your birthday</option>
		<option value='What is your pet'>What is your pet</option>
		<option value='Where is your City'>Where is your City</option>
		</select>
		Answer: <input type='text' name='answer' value='".$ans."'><br>
		
		<input type='submit' class='btn btn-primary' name='submit' value='Confirm'>
	</form>";
	

			}
?>

<?php
// If the values are posted, insert them into the database.

	if (isset($_POST['submit'])){
	$cusername		= $_POST['cusername'];
	$username       = $_POST['username'];
	$firstname      = $_POST['firstname'];
	$midname       	= $_POST['midname'];
	$lastname       = $_POST['lastname'];
	$cemail       	= $_POST['cemail'];
	$ccontact       = $_POST['ccontact'];
	$cques			= $_POST['ques'];
	$cans			= $_POST['answer'];
	
$query = "UPDATE admin 
			SET user_id='$username',fname='$firstname',mname='$midname',lname='$lastname',email='$cemail',contact='$ccontact',sec_que='$cques',secq='$cans' where user_id='$cusername' ";
			
			mysqli_multi_query($con2, $query);
		session_start();
unset($_SESSION["user_id"]);
 $_SESSION['user_id'] = $username;
			header('Location:event.php?page=1');
    
	}
   
?>