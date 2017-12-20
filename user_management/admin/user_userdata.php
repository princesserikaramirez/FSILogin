<?php
	include('inc/db2.php');
	
	
	if(isset($_GET['term'])){
				$term = $_GET['term'];
	}else{
		$term = '';
	}

	$sql2 = "SELECT * FROM user WHERE fname LIKE '%$term%' OR mname LIKE '%$term%' OR user_id LIKE '%$term%' OR sec_id LIKE '%$term%'";
	

	if(isset($_POST['submit'])){
		
		if(isset($_POST['name'])){
			$term = $_POST['name'];
		}else{
			$term = '';
		}
		
		echo "<script type=\"text/javascript\">".
							"window.location.href = 'users.php?term=$term';".
							"</script>";
		
	}
	
	$res2 = mysqli_query($con2,$sql2);

?>
 
		<?php
		echo "<div class='module-body table'>
		<table cellpadding='0' cellspacing='0' border='0' class='datatable-1 table table-bordered table-striped	 display' width='100%'>
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Section
					</th>
				
					<th>
						Section ID
					</th>
				</tr>
			</thead>";	
		while($row2 = mysqli_fetch_array($res2)){
		$id     		=$row2['user_id'];
		$fname			=$row2['lname'];
		$mname			=$row2['mname'];
		$lname  		=$row2['fname'];
		$section			=$row2['SECTION_ID'];
					
		echo  "<tbody><tr><td>".$fname." ".$mname." ".$lname."</td>",
					"<td>".$section. "</td>",
			"<td>". $row2['contact']."</tr></tbody></div></div></div>";
					
	}
	echo "</table></div>";
	?>
  
    