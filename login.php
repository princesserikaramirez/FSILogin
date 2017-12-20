<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link type="text/css" href="/FSILogin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="/FSILogin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="/FSILogin/assets/css/theme.css" rel="stylesheet">
		<link type="text/css" href="/FSILogin/assets/images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        
       
				 
		<?php 
            # Variable declarations
            $title = "FSI Document Management System"; 
            $desc = "Thisf is a document browser and announcement viewer of FSI";
        ?>
        <title>
			DMS-FSI
		</title>
		
    </head>

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
	    header("Location: /FSILogin/user_management/admin/loginlog.php");
         }
		else if($rows2==1){
		$_SESSION['user_id'] = $username;
            // Redirect user to index.php
	    header("Location: /FSILogin/user_management/admin/loginlog2.php
");
		}
		 else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>

<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="@">
			  		DMS-FSI
			  	</a>
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post" name="login" action="">
						<div class="module-head">
							<h1>Sign In</h1>
						</div>
						<div class="module-body" style="margin-top: 10px; margin-bottom:10px;">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="user_id" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password"  name="user_passwd" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="submit" style="font-color:#ffffff !important; "class="btn btn-standard btn-primary  pull-right" >Login</button>
									<a href='forgot.php'>Forgot Password</a>
									</br><a href='register.php'>Register Account</a>

								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
	

<?php } ?>
</body>
</html>