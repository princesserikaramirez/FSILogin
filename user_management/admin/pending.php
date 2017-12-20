<?php include 'header.php'; ?>
<div class="wrapper">
	<div class="container">
		<div class="row">
		
			<div class="span3">
				<?php include 'side.php'; ?>
			</div>
			<div class="span7">
				<div class="content">
				
					<div class="module">
						<div class="module-head">
							<h1>Pending Post</h1>
						</div>
						
						<div class="module-body">
							<div class="stream-composer media">
											
							</div>
							
								<section class="section-padding">
		
		
	 <div class='module-body table'>
    <table alignment=center  class="datatable-1 table table-bordered table-striped display"  width="100%">
	
		<tr>
			<th>Name of Requester</th>
			<th>Details</th>
			<th>Decision</th>
		</tr>
		<?php
include('inc/db4.php');	
	if (isset($_POST['submit']))
	{
			$id         = $_POST['doc_id'];

		$query = "UPDATE documents SET adm_aprvl='1'  WHERE id='$id' ";
			mysqli_multi_query($con, $query);
		
	
	}
	else if (isset($_POST['decline']))
	{
			$id         = $_POST['doc_id'];

		$query = "UPDATE documents SET adm_aprvl='3'  WHERE id='$id' ";
			mysqli_multi_query($con, $query);
		
	
	}
			
?>
		<?php
			include('inc/db3.php');

	$sql3 = "SELECT * FROM documents";

	$res3 = mysqli_query($con3,$sql3);
			
			while($row3 = mysqli_fetch_array($res3)){
				$user				=$row3['user'];
					$id					=$row3['id'];
					$upload_name        =$row3['name'];
					$file_name			=$row3['fileName'];
					$description		=$row3['description'];
					$doc_sec_id			=$row3['SECTION_ID'];
					$page          	    =$row3['page'];
					$path				=$row3['path'];	
					$doc_odg			=$row3['ODG_ID'];
					$doc_cirss			=$row3['CIRSS_ID'];
					$doc_cprsd			=$row3['CPRSD_ID'];
					$doc_afsd			=$row3['AFSD_ID'];
					$aprvl				=$row3['adm_aprvl'];
					
				if($aprvl == 0){
				
						echo "<form action='pending.php' method='post'>";
						echo "<input type=hidden name='doc_id' value='".$id."'>";
			echo "<tr><td>".$row3['user']."</th></td>";
			echo "<td> ".$row3['description']." </th></td>";
			

			echo '<td><input type="submit" name="submit" value="Approve"></a>';
			echo '<input type="submit" name="decline" value="Decline"></a></th></td></tr>';
		echo "</form>";
					
					}
			
			}
		?>
		
    </table>
	</div>
	
						</section>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>