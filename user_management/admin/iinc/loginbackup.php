<?php
session_start();
$_SESSION['xMessage']= $_SESSION['xMessage'];
?>

<html>
		<title>
			Login
		</title>
		
		<meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <link href="/FSI/Assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="/FSI/Assets/css/freelancer.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="/FSI/Assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
				 
		<?php 
            # Variable declarations
            $title = "FSI Document Management System"; 
            $desc = "This is a document browser and announcement viewer of FSI";
        ?>

		
		<body>
			<center>
			<br>
				<h1> FSI Document Management System</h1>
				<h3>This is a document browser and announcement viewer of FSI</h3>
				
				<div>
					<form action="logincore.php" method="post">
						
						<input type="text" name="user_id" placeholder="Username" required="required" />
							
							<br>
							<br>
							
						<input type="password" name="user_passwd" placeholder="Password" required="required" />
							
							<br>
							<br>
							<br>
							
							<button type="submit">
								Login
							</button>
					</form>
							
				</div>
				
	
			</center>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/freelancer.js"></script>
		</body>
	</html>




