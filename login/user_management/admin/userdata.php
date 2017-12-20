<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM user";

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
						Username
					</th>
					<th>
						Section Id
					</th>
				</tr>
			</thead>";	
		while($row2 = mysqli_fetch_array($res2)){
		$id     		=$row2['user_id'];
		$fname			=$row2['lname'];
		$mname			=$row2['mname'];
		$lname  		=$row2['fname'];
					
		echo  "<tbody><tr><td>"
			,"<p class='media-title'>".$fname .""
			," ". $mname . 
			" ". $lname ."</p>";
			echo "</td></tr></tbody></div></div></div>";
					
	}
	echo "</table></div>";
	?>
  
    