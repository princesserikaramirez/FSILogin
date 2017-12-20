 <?php
	include('auth2.php');
	
?>
<?php
	include('inc/db3.php');
	
	
	$sql3 = "SELECT * FROM documents where id='".$_SESSION['edit_post']."' ";
		
	$res3 = mysqli_query($con3,$sql3);
	

?>

<?php
	include('inc/db2.php');

	$sql2 = "SELECT * FROM admin WHERE user_id='".$_SESSION['user_id']."'";

	$res2 = mysqli_query($con2,$sql2);

?>

<?php
					
					//echo $user_id;
					//echo $user_passwd;
					
				unset($_SESSION["edit_post"]);
						while($row2 = mysqli_fetch_array($res2))
						{
							
							$id     		=$row2['user_id'];

							$name			=$row2['user_passwd'];
							$description	=$row2['lname'];
							$sec_id         =$row2['SECTION_ID'];
							$odg			=$row2['ODG_ID'];
							$cirss			=$row2['CIRSS_ID'];
							$cprsd			=$row2['CPRSD_ID'];
							$afsd			=$row2['AFSD_ID'];
					
							while($row3 = mysqli_fetch_array($res3)){
								$user     			=$row3['user'];
								$editid				=$row3['id'];
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
								
								
								if(($page == 2) && ($sec_id == $doc_sec_id) && ($aprvl == 1)||($sec_id == 1)){
									if(($odg == 1)&&($doc_odg== 1)){
								echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div>";
								}
								
									else if(($cirss == 1)&&( $doc_cirss== 1) && ($aprvl == 1)||($sec_id == 1)){
								echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div>";
								
								}
								
									else if(($cprsd == 1)&&( $doc_cprsd== 1) && ($aprvl == 1)||($sec_id == 1)){
								echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div>";
								}
								
								else if(($afsd == 1)&&( $doc_afsd== 1) && ($aprvl == 1)||($sec_id == 1)){
								echo "</br><div class='media stream'><div class='stream-list'><div class='media-body'>";
								//echo "$fname $mname $lname";
								echo  "<p><h3 class='stream-author'>  " ,"(".$user.")"
								," </h3><small>date here</small>".$upload_name ."</p><p>Description:</p>"
								,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='stream-text'>". $description . 
								"</div>
								<div class='stream-options'>
												<a href='download_file.php?dow=$path' class='btn btn-small'>
													<i class='icon-download shaded'></i>
													<h6 class='stream-author'>".$file_name."</h6>
												</a>";
								echo "</div></div></div>";
								}
								
								else 
									
									{echo"";}
								}
							}
					}

				
?>