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
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
	$fname        = $_POST['fname'];
	$mname    	  = $_POST['mname'];
	$lname         = $_POST['lname'];
	$number         = $_POST['cnumber'];
	$email         = $_POST['email'];
	$question         = $_POST['question'];
	$answer         = $_POST['answer'];
	$password         = $_POST['password'];
	$cpassword         = $_POST['cpassword'];
	switch($_POST['make']){
case '1':
		$odg         = 1;
		$cirss       = 0;
		$cprsd       = 0;
		$afsd        = 0;
break;
case '2':
		$odg         = 0;
		$cirss       = 1;
		$cprsd       = 0;
		$afsd        = 0;
break;
case '3':
		$odg         = 0;
		$cirss       = 0;
		$cprsd       = 1;
		$afsd        = 0;
break;
case '4':
		$odg         = 0;
		$cirss       = 0;
		$cprsd       = 0;
		$afsd        = 1;
break;
case '5':
		$odg         = 1;
		$cirss       = 1;
		$cprsd       = 1;
		$afsd        = 1;
break;
default:
    // Something went wrong or form has been tampered.
}
	$section         = $_POST['model'];

        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
        $query = "SELECT * FROM user WHERE user_id='$username'";
		
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	
        if($rows==1){
	   
    echo"name already exists";
	
         }
		else{
        if($password == $cpassword){
			$queryreg = "INSERT INTO user
			(user_id,user_passwd,lname,fname,mname,email,contact,ODG_ID,CIRSS_ID,CPRSD_ID,AFSD_ID,SECTION_ID,secq,sec_que)
			VALUES 
			('$username','$password','$lname','$fname','$mname','$email','$number'
			,'$odg','$cirss','$cprsd','$afsd','$section','$answer','$question')
			
			";
			mysqli_multi_query($con, $queryreg);
			header("Location: /FSILogin/login.php");
		}
		else{
			  echo"password not match";
		}
	    
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
							<h3>Please fill up the form</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<h5>First Name</h5>
									<input class="span12" type="text" name="fname" id="inputEmail" required >
									<h5>Middle Name</h5>
									<input class="span12" type="text" name="mname" id="inputEmail"  >
									<h5>Last Name</h5>
									<input class="span12" type="text" name="lname" id="inputEmail" required >
									<h5>Contact Number</h5>
									<input class="span12" type="text" name="cnumber" id="inputEmail"  required >
									<h5>Email</h5>
									<input class="span12" type="text" name="email" id="inputEmail" required >
									</br></br>
									<select name='question' onchange='getmodel();'>
									<option value='What is your sport'>What is your sport</option>
									<option value='Who is your mother'>Who is your mother</option>
									<option value='When is your birthday'>When is your birthday</option>
									<option value='What is your pet'>What is your pet</option>
									<option value='Where is your City'>Where is your City</option>
									</select>
									<h5>Answer: </h5>
									<input type='text' name='answer'><br>
									<h5>Username</h5>
									<input class="span12" type="text" name="username" id="inputEmail"  required >
									<h5>Password</h5>
									<input class="span12" type="password" name="password" id="inputEmail"  required >
									<h5>Confirm Password</h5>
									<input class="span12" type="password" name="cpassword" id="inputEmail" required >
									</br></br>
									</div>
															</div>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<select name='make' onchange='getmodel();'>
<option value="0">Department</option><?phpif(make == 5){ODG = 1;}?>
<option value="1">Office of the Director General</option>
<option value="2">Center for International Relations Strategic Studies</option>
<option value='3'>Carlos P. Romulo School of Diplomacy</option>
<option value='4'>Administrative and Financial Services Division</option>
</select>
			
<select name='model'>

</select>
	<script>
	var model=new Array();
function getmodel() {
var make=$('select[name=make]').val();
if(make==='1'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>Section</option>	<option value='ODG Proper'>ODG Proper</option>	<option value='Institutional Linkages Unit'>Institutional Linkages Unit</option>	<option value='Publication Section'>Publication Section</option>	<option value='Library Section'>Library Section</option>");
		}

if(make==='2'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Traditional Security Studies Section'>Traditional Security Studies Section</option>	<option value='Non-Traditional Security Studies Section'>Non-Traditional Security Studies Section</option>	<option value='International Organizations Section'>International Organizations Section</option>	<option value='Area Studies Section 1'>Area Studies Section 1</option>	<option value='Area Studies Section 2'>Area Studies Section 2</option>	<option value='ASEAN Programs Section'>ASEAN Programs Section</option>	<option value='Special Projects Section'>Special Projects Section</option>");
		}

if(make==='3'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Core Programs Section'>Core Programs Section</option>	<option value='Professional & Technical Programs Section'>Professional & Technical Programs Section</option>	<option value='Language Programs Section'>Language Programs Section</option>	<option value='Special Programs Section'>Special Programs Section</option>	<option value='Scholarship Programs Section'>Scholarship Programs Section</option>	<option value='Training Evaluating Section'>Training Evaluating Section</option>	<option value='International Programs/ e-Learning Section'>International Programs/ e-Learning Section</option>");
		}

if(make==='4'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Personnel Section'>Personnel Section</option>	<option value='Financial Mgmt. Section'>Financial Mgmt. Section</option>	<option value='Internal Audit Section'>Internal Audit Section</option>	<option value='General Services Section'>General Services Section</option>	<option value='Management Information Systems Section'>Management Information Systems Section</option>");
		}  
if(make==='5'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>Section</option> <option value='ODG Proper'>ODG Proper</option> <option value='Office of the Head'>Office of the Head</option> <option value='Institutional Linkages Unit'>Institutional Linkages Unit</option> <option value='Publication Section'>Publication Section</option>	<option value='Library Section'>Library Section</option> 	<option value='Traditional Security Studies Section'>Traditional Security Studies Section</option>	<option value='Non-Traditional Security Studies Section'>Non-Traditional Security Studies Section</option>	<option value='International Organizations Section'>International Organizations Section</option>	<option value='Area Studies Section 1'>Area Studies Section 1</option>	<option value='Area Studies Section 2'>Area Studies Section 2</option>	<option value='ASEAN Programs Section'>ASEAN Programs Section</option>  	<option value='Core Programs Section'>Core Programs Section</option>	<option value='Professional & Technical Programs Section'>Professional & Technical Programs Section</option>	<option value='Language Programs Section'>Language Programs Section</option>	<option value='Special Programs Section'>Special Programs Section</option>	<option value='Scholarship Programs Section'>Scholarship Programs Section</option>	<option value='Training Evaluating Section'>Training Evaluating Section</option>	<option value='International Programs/ e-Learning Section'>International Programs/ e-Learning Section</option><option value='Personnel Section'>Personnel Section</option>	<option value='Financial Mgmt. Section'>Financial Mgmt. Section</option>	<option value='Internal Audit Section'>Internal Audit Section</option>	<option value='General Services Section'>General Services Section</option>	<option value='Management Information Systems Section'>Management Information Systems Section</option>");
		
		}  
}
	</script>
								

							
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
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