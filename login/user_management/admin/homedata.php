<?php
	include('auth.php');
?>

<?php
	include('inc/db3.php');
	
	$page=$_GET["page"];
	if($page=="" || $page=="1")
	{
		$page1=0;
	}
	else
	{
		$page1=($page*5)-5;
	}
	
	$sql3 = "SELECT * FROM documents where page='2' order by date desc limit $page1,5";
	$sql33 = "SELECT * FROM documents where page='2' order by date desc ";
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
								$date			=$row3['date'];
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
								
								if(($page == 2) && ($aprvl == 1) && ($sec_id == $doc_sec_id)){
									echo "<div class='stream-list'>"; 
									if(($odg == 1)&&($doc_odg== 1)){
										
										//echo "$fname $mname $lname";
										echo  " <p align='right'><small>date here</small></p>
										<p>
										
												<h5>" ,"(".$user.")</h5>"
										,"
											
											
												
											</p> <p> <strong>Title: </strong> &nbsp; &nbsp;
											"
										.$upload_name ." </p>
										
										
										<p>
										<strong>Description: </strong> &nbsp; &nbsp;
										
										"
										
										," ". $description . 
										"</p>
										<div class='stream-options'>
														<a href='download_file.php?dow=$path' class='btn btn-small'>
															<i class='icon-download shaded'></i>
															".$file_name."
														</a>
										</div>";
										
									}
								
									else if(($cirss == 1)&&( $doc_cirss== 1)){
								//echo "$fname $mname $lname";
										echo  " <p align='right'><small>date here</small></p>
										<p>
										
												<h5>" ,"(".$user.")</h5>"
										,"
											
											
												
											</p> <p> <strong>Title: </strong> &nbsp; &nbsp;
											"
										.$upload_name ." </p>
										
										
										<p>
										<strong>Description: </strong> &nbsp; &nbsp;
										
										"
										
										," ". $description . 
										"</p>
										<div class='stream-options'>
														<a href='download_file.php?dow=$path' class='btn btn-small'>
															<i class='icon-download shaded'></i>
															".$file_name."
														</a>
										</div>";
										
									}
								
									else if(($cprsd == 1)&&( $doc_cprsd== 1)){
								//echo "$fname $mname $lname";
										echo  " <p align='right'><small>date here</small></p>
										<p>
										
												<h5>" ,"(".$user.")</h5>"
										,"
											
											
												
											</p> <p> <strong>Title: </strong> &nbsp; &nbsp;
											"
										.$upload_name ." </p>
										
										
										<p>
										<strong>Description: </strong> &nbsp; &nbsp;
										
										"
										
										," ". $description . 
										"</p>
										<div class='stream-options'>
														<a href='download_file.php?dow=$path' class='btn btn-small'>
															<i class='icon-download shaded'></i>
															".$file_name."
														</a>
										</div>";
										
									}
								
								else if(($afsd == 1)&&( $doc_afsd== 1)){
								echo "</br>";
								//echo "$fname $mname $lname";
										echo  " <p align='right'><small>date here</small></p>
										<p>
										
												<h5>" ,"(".$user.")</h5>"
										,"
											
											
												
											</p> <p> <strong>Title: </strong> &nbsp; &nbsp;
											"
										.$upload_name ." </p>
										
										
										<p>
										<strong>Description: </strong> &nbsp; &nbsp;
										
										"
										
										," ". $description . 
										"</p>
										<div class='stream-options'>
														<a href='download_file.php?dow=$path' class='btn btn-small'>
															<i class='icon-download shaded'></i>
															".$file_name."
														</a>
										</div>";
										
									}
								
								else 
									
									{echo"";}
								}
							echo "</div>";}
					}
					$res9 = mysqli_query($con3,$sql33);
					$cou = mysqli_num_rows($res9);
					$a = $cou/5;
					$a = ceil($a);
					echo "<br>";echo "<br>";
					
						for($b=1;$b<=$a;$b++)
						{
							
							?></br></br><div  class="pagination pagination-centered"><ul><li><a href="home.php?page=<?php echo $b; ?>"  style="text-decoration:none"><?php echo $b." "; ?></a></li></ul></div> <?php
							
						}
				
?>