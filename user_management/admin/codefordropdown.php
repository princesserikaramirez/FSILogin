<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM admin WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>


<?php
	
			while($row2 = mysqli_fetch_array($res2))
		{
			$user_id  =$row2['user_id'];
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
			,'$odg','$cirss','$cprsd','$afsd','$section','$name','$aprvl','$user_id');
			INSERT INTO logs 
			(user_id,fileName,date,process) 
			VALUES 
			('$user_id','$name',now(),'upload');";
			mysqli_multi_query($con, $query);
		
			header('Location:event.php?page=1');
		}
		
		
		else
		{
			$location = "documents/$name";
			move_uploaded_file($tmp_name, $location);
			$query = "INSERT INTO documents 
			(name,path,page,description,date,ODG_ID,CIRSS_ID,CPRSD_ID,AFSD_ID,SECTION_ID,fileName,adm_aprvl,user )
			VALUES 
			('$doc_name','$location','$file_page','$description',now()
			,'$odg','$cirss','$cprsd','$afsd','$section','$name','$aprvl','$user_id');
			INSERT INTO logs 
			(user_id,fileName,date,process) 
			VALUES 
			('$user_id','$name',now(),'upload');";
			mysqli_multi_query($con, $query);

			header('Location:event.php?page=1');
	
		}
	}
	}
			
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
		
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
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<select name='make' onchange='getmodel();'>
<option value="ALLDEP">All Department</option>
<option value="ODG">Office of the Director General</option>
<option value="CIRSS">Center for International Relations Strategic Studies</option>
<option value='CPRSD'>Carlos P. Romulo School of Diplomacy</option>
<option value='AFSD'>Administrative and Financial Services Division</option>
</select>

<select name='model'>

</select>
	<script>
	var model=new Array();
function getmodel() {
var make=$('select[name=make]').val();
if(make==='ODG'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>All Section</option>	<option value='ODG Proper'>ODG Proper</option>	<option value='Institutional Linkages Unit'>Institutional Linkages Unit</option>	<option value='Publication Section'>Publication Section</option>	<option value='Library Section'>Library Section</option>");}

if(make==='CIRSS'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>All Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Traditional Security Studies Section'>Traditional Security Studies Section</option>	<option value='Non-Traditional Security Studies Section'>Non-Traditional Security Studies Section</option>	<option value='International Organizations Section'>International Organizations Section</option>	<option value='Area Studies Section 1'>Area Studies Section 1</option>	<option value='Area Studies Section 2'>Area Studies Section 2</option>	<option value='ASEAN Programs Section'>ASEAN Programs Section</option>	<option value='Special Projects Section'>Special Projects Section</option>");}

if(make==='CPRSD'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>All Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Core Programs Section'>Core Programs Section</option>	<option value='Professional & Technical Programs Section'>Professional & Technical Programs Section</option>	<option value='Language Programs Section'>Language Programs Section</option>	<option value='Special Programs Section'>Special Programs Section</option>	<option value='Scholarship Programs Section'>Scholarship Programs Section</option>	<option value='Training Evaluating Section'>Training Evaluating Section</option>	<option value='International Programs/ e-Learning Section'>International Programs/ e-Learning Section</option>");}

if(make==='AFSD'){$("select[name=model]").html('');$("select[name=model]")
	.append
		("<option value='All Section'>All Section</option>	<option value='Office of the Head'>Office of the Head</option>	<option value='Personnel Section'>Personnel Section</option>	<option value='Financial Mgmt. Section'>Financial Mgmt. Section</option>	<option value='Internal Audit Section'>Internal Audit Section</option>	<option value='General Services Section'>General Services Section</option>	<option value='Management Information Systems Section'>Management Information Systems Section</option>");}  
}
	</script>
		
			
			
			<input type="submit" name="submit" value="upload">
			<input type="button" name="cancel" value=" Cancel " />    
			
	
		</form>
	