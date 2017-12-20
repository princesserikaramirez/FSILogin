
<?php
	include('inc/db3.php');

	$sql3 = "SELECT * FROM documents";

	$res3 = mysqli_query($con3,$sql3);

?>

<?php
include('inc/db4.php');	
	if (isset($_POST['submit']))
	{
			$id         = $_POST['doc_id'];

		$query = "UPDATE documents SET adm_aprvl='1'  WHERE id='$id' ";
			mysqli_multi_query($con, $query);
		
	header('Location:pending.php');
	}
			
?>

<?php
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
					echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
					echo "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
													<h6 class='stream-author'>".$file_name."</h6>";
								echo "</div></div></div></br>";
					
					echo "<input type='submit' name='submit' align='right' value='Aprrove'>";
					echo "</form>";
					echo "</div></div></div>";
					}
	}
?> 