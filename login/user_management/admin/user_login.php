<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('iinc/dbdb.php');
session_start();
unset($_SESSION["user_id"]);
// If form submitted, insert values into the database.
if (isset($_POST['user_id'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['user_id']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['user_passwd']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM admin WHERE user_id='$username'
and user_passwd='$password'";
		
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
	$query2 = "SELECT * FROM user WHERE user_id='$username'
and user_passwd='$password'";
	$result2 = mysqli_query($con,$query2) or die(mysql_error());
	$rows2 = mysqli_num_rows($result2);
        if($rows==1){
	    $_SESSION['user_id'] = $username;
            // Redirect user to index.php
	    header("Location: ../../user_management/admin/home.php?page=1
");
         }
		else if($rows2==1){
		$_SESSION['user_id'] = $username;
            // Redirect user to index.php
	    header("Location: ../../user_management/admin/user_home.php?page=1
");
		}
		 else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<h1>
	LOG IN PAGE
</h1>

<header>
<style>
table, td, th {    
    border: 2px solid #ddd;
    text-align: left;
}

table {

}


</style>

<section class="section-padding">
	<div class="form">
	<table alignment=center>
	
		<tr><h3><b>
			<th>USERNAME:</th>
			<th>PASSWORD:</th>
		</tr></h3></b>

		<tr>
			<td>
				<form action="" method="post" name="login">
				<input type="text" name="user_id" placeholder="Username" required />
			</td>	
			
			<td>
				<input type="password" name="user_passwd" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
				</form>
			</td>
			</tr>
			<tr>
			<td>
				<p>NOT YET REGISTERED? <a href='registration.php'>CREATE ACCOUNT</a></p>
		</td>
		</tr>
	</table>
	</div>
<?php } ?>
</body>
</html>