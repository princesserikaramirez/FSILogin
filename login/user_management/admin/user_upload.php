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
			$user_fname	=$row2['fname'];
			$user_mname =$row2['mname'];
			$user_lname	=$row2['lname'];
			$user_fullname	= "".$user_fname." ".$user_mname." ".$user_lname."";
		include('inc/db.php');	
	if (isset($_POST['submit']))
	{

		$aprvl		 = 0;
		$odg1         = $_POST['try'];
		$odg         = $_POST['ODG'];
		$cirss       = $_POST['CIRSS'];
		$cprsd       = $_POST['CPRSD'];
		$afsd        = $_POST['AFSD'];
		$section     = $_POST['SECTION'];
		$date = date('Y-m-d H:i:s');
		$description = $_POST['desc'];
		$file_page = $_POST['page'];
		$doc_name = $_POST['doc_name'];
		$name   = $_FILES['myfile']['name'];
		$tmp_name = $_FILES['myfile']['tmp_name'];

		
		
		if ($name && $doc_name)
		{

			$location = "documents/$name";
			move_uploaded_file($tmp_name, $location);
			$query = "INSERT INTO documents 
			(name,path,page,description,date,ODG_ID,CIRSS_ID,CPRSD_ID,AFSD_ID,SECTION_ID,fileName,adm_aprvl,user) 
			VALUES 
			('$doc_name','$location','$file_page','$description',now()
			,'$odg','$cirss','$cprsd','$afsd','$section','$name','$aprvl','$user_fullname');
			INSERT INTO logs 
			(user_id,SECTION_ID,fileName,date) 
			VALUES 
			('$user_id','$section','$name',now());";
			mysqli_multi_query($con, $query);
		
			header('Location:user_event.php?page=1');
		}
		
		
		else
		{
			$location = "documents/$name";
			move_uploaded_file($tmp_name, $location);
			$query = "INSERT INTO documents 
			(name,path,page,description,date,ODG_ID,CIRSS_ID,CPRSD_ID,AFSD_ID,SECTION_ID,fileName,adm_aprvl,user )
			VALUES 
			('$doc_name','$location','$file_page','$description',now()
			,'$odg','$cirss','$cprsd','$afsd','$section','$name','$aprvl','$user_fullname');
			INSERT INTO logs 
			(user_id,SECTION_ID,fileName,date) 
			VALUES 
			('$user_id','$section','$name',now());";
			mysqli_multi_query($con, $query);

			header('Location:user_event.php?page=1');
	
		}
	}
	}
			
?>

<form action="user_upload.php" method="post" enctype="multipart/form-data">
		
	<input type="radio" name="page"
		<?php if (isset($page) && $page=="home") echo "checked";?>
		value="2">Home
	<input type="radio" name="page"
		<?php if (isset($page) && $page=="events") echo "checked";?>
		value="1">Events
			
			
	</br><label>Title</label>
	<input type="text" name="doc_name"></br>
	<input type="file" name="myfile"></br>
			
			<label>Description</label></br>
			<input type="text" maxlength="500" style="height: 180px;width: 300px" name="desc"></br>
			
			<input type="checkbox" name="ODG" value="1" > ODG

			<input type="checkbox" name="CIRSS" value="1" > CIRSS

			<input type="checkbox" name="CPRSD" value="1" > CPRSD
		
			<input type="checkbox" name="AFSD" value="1" > AFSD
			<input type="hidden" name="try" value="1" >  <br>
		
			<select name="SECTION">
				<option value="1" >Institution Linkages Unit           </option>
				<option value="2" >Traditional Security Studies Section </option>
				<option value="3" >Core Programs Section                </option>
				<option value="4" >Financial Mgmt. Section              </option>
			</select>
			
			<input type="submit" name="submit" value="upload">
			<input type="button" name="cancel" value=" Cancel " />    
			
	
	</form>