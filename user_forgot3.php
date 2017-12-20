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
if (isset($_POST['user_id'])){

			
			
	    header("Location: /FSILogin/login.php");
         

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
							<h3>Congrats</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<?php
									
									while($row2 = mysqli_fetch_array($res2))
									{
							
										$id     		=$row2['user_id'];
										$secq			=$row2['user_passwd'];
										echo  "<p><h3 class='stream-author'>  " ,"Your password is: ","".$secq."";
										echo "<input class='span12' type='hidden' name='user_id' id='inputEmail' value='".$id."'>";
						}
						?>
								</div>
							</div>
							
						</div>
						
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="submit" class="btn btn-primary pull-right">Login</button>
									
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