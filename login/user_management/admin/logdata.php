<?php
	include('inc/db3.php');

	$sql2 = "SELECT * FROM logs ";

	$res2 = mysqli_query($con3,$sql2);
	
	$page=$_GET["page"];
	if($page=="" || $page=="1")
	{
		$page1=0;
	}
	else
	{
		$page1=($page*5)-5;
	}
	
	$sql3 = "SELECT * FROM logs  order by date desc limit $page1,5";
	$sql33 = "SELECT * FROM logs  order by date desc ";
	$res3 = mysqli_query($con3,$sql3);

?>


<?php

	
		//echo $user_id;
		//echo $user_passwd;
		
			echo "
			<div class='module'>
							<div class='module-head'>
								<h3>DataTables</h3>
							</div>
							<div class='module-body table'>
			<table cellpadding='0' cellspacing='0' border='0' class='datatable-1 table table-bordered table-striped	 display' width='100%'>
			<thead>
				<tr>
					<th>
						User
					</th>
					<th>
						File name
					</th>
					<th>
						Section Id
					</th>
					<th>
						Date
					</th>
				</tr>
			</thead>";	

		
				
				
				while($row3 = mysqli_fetch_array($res3)){
					$user     			=$row3['user_id'];
					$fileName			=$row3['fileName'];
				$date				=$row3['date'];
				$sec_id        	    =$row3['SECTION_ID'];
					echo  "<tbody><tr><td>"," ".$user ."</td>"
					,"<td>". $fileName . "</td>"
					,"<td>". $sec_id ."</td>"
					,"<td>". $date ."</td>";
					echo "</tr></tbody>";
					
				}
			echo "</table></div></div></div>";
			
			$res9 = mysqli_query($con3,$sql33);
					$cou = mysqli_num_rows($res9);
					$a = $cou/5;
					$a = ceil($a);
					echo "<br>";echo "<br>";
					
						for($b=1;$b<=$a;$b++)
						{
							
							?><a href="log.php?page=<?php echo $b; ?>" style="text-decoration:none"><?php echo $b." "; ?></a> <?php
						}
?>





 