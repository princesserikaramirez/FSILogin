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
	include('auth.php');
?>

<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>
<?php
require('iinc/dbdb.php');
// If form submitted, insert values into the database.
if (isset($_POST['secq'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['user_id']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['secq']);
	$password = mysqli_real_escape_string($con,$password);
	$query = "SELECT * FROM user WHERE user_id='$username' AND secq='$password'";
		
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);

        if($rows==1){
	    $_SESSION['user_id'] = $username;
            // Redirect user to index.php
			
			
	    header("Location: /FSILogin/login/user_forgot3.php");
         }

		 else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>


</style>
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
							<h3>Step 2: Answer the security question</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<?php
									
									while($row2 = mysqli_fetch_array($res2))
									{
							
										$id     		=$row2['user_id'];
										$secq			=$row2['sec_que'];
										echo  "<p><h3 class='stream-author'>  " ,"".$secq."";
										echo "<input class='span12' type='hidden' name='user_id' id='inputEmail' value='".$id."'>";
						}
						?>
								</div>
							</div>
							
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" name="secq" id="inputEmail" required>
								</div>
							</div>
							
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="submit" class="btn btn-primary pull-right">Login</button>
									<a href='forgot.php'>Forgot Password</a>
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